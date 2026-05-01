<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;

class CheckoutController
{
    public function index(Item $item){
        $data = $item->slug;
        return view('front.checkout',[
            'slug'=>$data
        ]);
    }

    public function store(Request $request, Item $item){
            $data = $request->all();
            dd($data);
    }
}
