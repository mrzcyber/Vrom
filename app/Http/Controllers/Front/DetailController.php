<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;

class DetailController
{
    public function show(Item $item){
        $data=$item->load('image','type','brand');
        return view('front.detail',compact('data'));
    }
}
