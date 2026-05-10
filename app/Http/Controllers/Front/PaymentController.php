<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Midtrans\Config;
use Midtrans\Notification;

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

    public function callback(Request $request){
    Config::$serverKey = config('midtrans.server_key');
    Config::$isProduction = config('midtrans.is_production');
    
    try {
        $notif = new Notification();
        Booking::where('order_id',$notif->order_id)->update([
            'payment_type'=>$notif->payment_type,
            'payment_status'=>$notif->transaction_status,
            'bank' => $notif->va_numbers[0]->bank

        ]);
         return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            Log::error('Midtrans Callback Error: ' . $e->getMessage());
            return response()->json(['message' => 'Invalid Notification'], 400);
        }
       
}


}
