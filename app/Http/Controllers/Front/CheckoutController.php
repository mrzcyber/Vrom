<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\CheckoutRequest;
use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
            $type = $item->name;
            $price = $item->price;
            $startDate = Carbon::createFromFormat('d m Y', $request->start_date);
            $endDate = Carbon::createFromFormat('d m Y', $request->end_date);

            $day = $startDate->diffInDays($endDate);
            $total = $price * $day;
            dd([
                'input'=>$input,
                'type'=>$type,
                'price'=>$price,
                "day"=>$day,
                'total'=>$total
            ]);

            
    }
}
