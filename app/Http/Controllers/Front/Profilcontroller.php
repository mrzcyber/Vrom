<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profilcontroller
{
    public function index(){
        $id = Auth::user()->id;
        $data = Booking::where('user_id',$id)
        ->with('item.thumbnail')
        ->get();
        return view('front.profil',compact('data'));
    }
}
