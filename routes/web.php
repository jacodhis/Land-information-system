<?php

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

//  Route::get('/', function () {
//     return view('welcome');

    
// });
 Route::get('/', function () {
    return view('welcomee');

    
});
 Route::get('/about', function () {
    return view('about');

    
});

 Route::get('/services', function () {
    return view('services');

    
});

 Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::resource('/lands', 'landscontroller');
Route::resource('/owners', 'ownerscontroller');
Route::resource('/taxes', 'taxcontroller');

Route::get('/lease/{id}', 'leasingcontroller@index');
Route::get('/leasing/create', 'leasingcontroller@create');
Route::post('/store', 'leasingcontroller@store');

Route::get('/payments', 'paymentscontroller@landspaid');
Route::post('/payments/{id}', 'paymentscontroller@leaseindex');
Route::get('/purchasepayments/{id}', 'paymentscontroller@purchaseindex');
Route::post('/submitpayment', 'paymentscontroller@store');
Route::post('/submitpurchase','paymentscontroller@purchase');
Route::get('/payment/{id}','paymentscontroller@show');
Route::get('/userspayments','paymentscontroller@mypayments');

// Route::post('pay-with-paypal','paymentscontroller@paywithpaypal');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
