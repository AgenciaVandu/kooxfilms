<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->get('/register/{camp?}', function ($camp = null) {

    if ($camp == 1) {
        $value = 1175;
    }else{
        $value = 3699;
    }
    return view('checkout.index',compact('value'));
})->name('checkout');

Route::get('approved/{transaction}', function (Request $request) {
    return $request->all();
})->name('approved');

Route::post('/sendemail',function(Request $request){
    $validator = Validator::make($request->all(), [
        'first_name' => 'required',
        'last_name' => 'required',
        'phone' => 'required',
        'adress' => 'required',
        'city' => 'required',
        'postal_code' => 'required',
    ]);
    if ($validator->passes()) {
        return response()->json(['success'=>'Added new records.']);
    }
    return response()->json(['error'=>$validator->errors()->all()]);

})->name('sendemail');

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
