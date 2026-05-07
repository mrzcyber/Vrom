<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;
use Illuminate\Http\Request;

class Profilcontroller
{
    public function index(){
        $data = Booking::get();
        return view('front.profil',compact('data'));
    }
}
