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
        $data = $item->slug;
        return view('front.checkout',[
            'slug'=>$data
        ]);
    }

    public function store(CheckoutRequest $request, Item $item){
         $input = $request->validated();
         
         $input['type']= $type = $item->name;
         $input['price'] = $price = $item->price;
         $startDate = Carbon::createFromFormat('d/m/Y', str_replace(' ', '/', $request->start_date));
         $endDate = Carbon::createFromFormat('d/m/Y', str_replace(' ', '/', $request->end_date));
         $input['end_date'] = $endDate->format('Y-m-d');
         $input['start_date'] = $startDate->format('Y-m-d');
         $input['total_day'] = $day = $startDate->diffInDays($endDate);

        if($day == 0 ){
        $input['total_day'] = $day = 1;
        };

        $input['total_price'] = $total = $day * $price * 1.1;
        $input['item_id'] = $item->id;
        $input['user_id'] = Auth::user()->id;
        $boking = Booking::create($input);


        $orderId = 'VR-' . str_pad($boking->id,6,'0', STR_PAD_LEFT);

        $params =[
            'transaction_details' =>[
                'order_id' => $orderId,
                'gross_amount' => $boking->total_price,
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
