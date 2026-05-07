<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;

class DetailController
{
    public function show(Item $item){
        $main=$item->load('image','type','brand');
            $data = Item::with(['image' => function($query) {
    $query->oldest()->limit(1);
}, 'type'])->latest()->take(4)->get()->reverse();

        return view('front.detail',compact('data','main'));
    }
}
