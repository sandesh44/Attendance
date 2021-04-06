<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\SmsController;

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
    return view('welcome');
});
Route::get('/newUser', function () {
    return view('newUser');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('students','StudentController');
Route::resource('attendance','AttendanceController');
Route::get('composer','SmsController@compose');
Route::post('send/sms','SmsController@sendSMS')->name('send.sms');
Route::get('sms/response', 'SmsController@sendSMS')->name('response.sms');
    
