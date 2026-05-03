<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class PaymentController
{
    public function index($id){
        return view('front.payment');
    }
}
