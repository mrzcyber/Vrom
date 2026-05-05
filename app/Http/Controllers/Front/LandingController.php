<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;

class LandingController
{
    public function index(){
        $data = Item::with(['image' => function($query) {
    $query->oldest()->limit(1);
}, 'type'])->latest()->take(4)->get()->reverse();
        return view('front.landing',compact('data'));
    }
}
