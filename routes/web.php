<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Page2Controller;


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


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::resource('user',UserController::class);

Route::resource('item',ItemController::class);

Route::resource('page',PageController::class);

Route::resource('order',OrderController::class);

Route::resource('page2',Page2Controller::class);


Route::POST('/login',[LoginController::class,'checklogin'])->name('login');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/',[UserController::class,'index']);

Route::get('/employee',[UserController::class,'getemployee'])->name('adminEmployee');

Route::get('/placeorder/{item}',[PageController::class,'placeorderpage'])->name('placeorder');

Route::get('/resetpassword',[UserController::class,'gotoReset'])->name('reset');

Route::post('/updatepassword',[UserController::class,'Resetpassword'])->name('getpassword');

Route::get('/customerorder',[UserController::class,'gotocustomerOrder'])->name('customerOrder');

Route::get('/customer',[UserController::class,'returnCustomer'])->name('returncustomer');

Route::get('/updatestatus/{order}',[OrderController::class,'updateStatus'])->name('updatestatus');

Route::get('/employeeOrder',[LoginController::class,'gotoEmployeeOrder'])->name('gotoemployeeorder');
