<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;

class DetailController
{
    public function show(Item $item){
        $main=$item->load('image','type','brand');

        $data = Item::where('brand_id',$item->brand_id)->with(['thumbnail', 'type'])->latest()->take(4)->get()->reverse();

        $brand = $item->brand->name;

        return view('front.detail',compact('data','main','brand'));
    }
}
