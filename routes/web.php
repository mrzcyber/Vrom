<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\DetailController;
use App\Http\Controllers\Front\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::name('front.')->group(function(){
Route::get('/a',[LandingController::class,'index'])->name('index');
Route::get('/detail/{item}',[DetailController::class,'show'])->name('detail');




Route::middleware([ 'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',])->group(function(){
        Route::get('checkout/{item}',[CheckoutController::class,'index']);
        Route::post('checkout/{item}',[CheckoutController::class,'store'])->name('checkout.store');
    });
});

// vrom route

Route::prefix('admin')->name('admin.')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('brand',BrandController::class);
    Route::resource('type',TypeController::class);
    Route::resource('item',ItemController::class);
});
