<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController
{
    public function index(){

        // Total Pendapatan (hanya yang success)
$totalPendapatan = Booking::where('payment_status', 'success')->sum('total_price');

// Pembayaran Berhasil
$totalBerhasil = Booking::where('payment_status', 'success')->count();

// Menunggu Pembayaran
$totalPending = Booking::where('payment_status', 'pending')->count();

// Pembayaran Gagal
$totalGagal = Booking::whereIn('payment_status', ['failed','cancel', 'expire', 'deny'])->count();

// data
$data = Booking::paginate(10);

        return view('admin.dashboard',compact('totalPendapatan','totalBerhasil','totalPending','totalGagal','data'));
    }
}
