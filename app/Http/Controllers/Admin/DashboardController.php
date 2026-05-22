<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController
{
    public function index(Request $request){

        // Total Pendapatan (hanya yang success)
$totalPendapatan = Booking::where('payment_status', 'success')->sum('total_price');

// Pembayaran Berhasil
$totalBerhasil = Booking::where('payment_status', 'success')->count();

// Menunggu Pembayaran
$totalPending = Booking::where('payment_status', 'pending')->count();

// Pembayaran Gagal
$totalGagal = Booking::whereIn('payment_status', ['failed','cancel', 'expire', 'deny'])->count();

// data

        if($request->get('q')){
            $q = $request->get('q');
            $data = Booking::where('name','LIKE',"{$q}%")->paginate(10);
            return view('admin.dashboard',compact('totalPendapatan','totalBerhasil','totalPending','totalGagal','data'));
        }

$status = $request->get('status');

$data = Booking::when($status, fn($q) => $q->where('payment_status', $status))
    ->latest()
    ->paginate(10);

        return view('admin.dashboard',compact('totalPendapatan','totalBerhasil','totalPending','totalGagal','data'));
    }
}
