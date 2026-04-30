<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;

class LandingController
{
    public function index(){
        $data = Item::with(['image','type','brand'])->latest()->take(4)->get()->reverse();
        // return view
    }
}
