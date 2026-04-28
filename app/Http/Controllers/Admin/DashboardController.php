<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class DashboardController
{
    public function index(){
        return view('admin.dashboard');
    }
}
