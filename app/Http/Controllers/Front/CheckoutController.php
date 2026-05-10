<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\CheckoutRequest;
use App\Models\Booking;
use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

class CheckoutController
{

    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    public function index(Item $item){
        $slug = $item->slug;

$bookedDates = Booking::where('item_id', $item->id)
    ->whereNotNull('payment_type') 
    ->where('end_date', '>=', today()) 
    ->get()
    ->flatMap(function ($booking) {
        $dates = [];
        $current = \Carbon\Carbon::parse($booking->start_date);
        $end = \Carbon\Carbon::parse($booking->end_date);
        
        while ($current->lte($end)) {
            $dates[] = $current->format('Y-m-d');
            $current->addDay();
        }
        return $dates;
    })
    ->unique()
    ->values()
    ->toArray();

        return view('front.checkout',compact('slug', 'bookedDates'));
    }

    public function store(CheckoutRequest $request, Item $item){
         $input = $request->validated();
         
         $input['type']= $type = $item->name;
         $input['price'] = $price = $item->price;
        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);
        
        $input['start_date'] = $request->start_date;
        $input['end_date'] = $request->end_date;
        $day =  $startDate->diffInDays($endDate);
        $input['total_day'] = $day;

        if($day == 0 ){
        $input['total_day'] = $day = 1;
        };

        $input['total_price'] = $total = (int) round($day * $price * 1.1);
        $input['item_id'] = $item->id;
        $input['user_id'] = Auth::user()->id;
        $boking = Booking::create($input);


        $orderId = 'VR-' . str_pad($boking->id,5,'0', STR_PAD_LEFT);

        $params =[
            'transaction_details' =>[
                'order_id' => $orderId,
                'gross_amount' => $boking->total_price,
            ],
            'enabled_payments' => [
            'bca_va', 
            'bni_va', 
            'bri_va', 
            'mandiri_bill', 
            'permata_va',
            'other_va'
        ],
            'costumer_details' =>[
                'first_name'=> $boking->user->name,
                'email' => $boking->user->email,
            ],
                'expiry' => [
                'unit'     => 'hour',
                'duration' => 1,
    ],
        ];

        $snapToken = Snap::getSnapToken($params);
        $boking->update([
            'snap_token' =>$snapToken,
            'order_id' => $orderId
        ]);

        return redirect()->route('front.payment',$boking->id);

            
    }
}
