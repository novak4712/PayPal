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

//форма оплаты
Route::get('/', 'PaymentController@index');
// обработка процесса оплаты
Route::post('paypal', 'PaymentController@payWithpaypal');
// проверка статуса оплаты
Route::get('status', 'PaymentController@getPaymentStatus');