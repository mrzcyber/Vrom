<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;
use Illuminate\Http\Request;


class PaymentController
{


    public function index($id){
        $data = Booking::with('item')->findOrFail($id);
        if($data->payment_type){
            return redirect()->route('front.payment.success');
        }
        return view('front.payment',compact('data'));
    }

    public function delete($id){
        $data = Booking::where('id',$id)->delete();
        return redirect()->route('front.index');
    }

    public function success(){
        return view('front.success');
    }


}
