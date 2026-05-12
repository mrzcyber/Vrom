<?php

namespace App\Http\Controllers\Front;

use App\Models\Brand;
use App\Models\Item;
use Illuminate\Http\Request;

class CatalogController
{
    public function index(){
        $data = Item::with(['type','brand','thumbnail'])->get();
        
        return view('front.catalog',compact('data'));
    }


}
