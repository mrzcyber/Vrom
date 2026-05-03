<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\CheckoutRequest;
use App\Models\Booking;
use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController
{
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

        $input['total_price'] = $total = $day * $price;
        $input['item_id'] = $item->id;
        $input['user_id'] = Auth::user()->id;
        $boking = Booking::create($input);
        return redirect()->route('front.payment',$boking->id);

            
    }
}
