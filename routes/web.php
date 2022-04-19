<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/camps', function () {
    return view('camps');
});
Route::get('/productions', function () {
    return view('productions');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/checkout/{camp?}', function ($camp = null) {

    if ($camp == 1) {
        $value = 1175;
    }else{
        $value = 3699;
    }
    return view('checkout.index',compact('value'));
})->name('checkout');


Route::get('/profile', function () {
    return view('user.profile');
});
Route::get('/sign-up', function () {
    return view('user.sign-up');
});
Route::get('/sign-in', function () {
    return view('user.sign-in');
});
Route::get('/reset-password', function () {
    return view('user.reset-password');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
