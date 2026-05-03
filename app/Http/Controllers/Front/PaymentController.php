<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;
use Illuminate\Http\Request;

class PaymentController
{
    public function index($id){
        $data = Booking::with('item')->findOrFail($id);
        return view('front.payment',compact('data'));
    }
}
