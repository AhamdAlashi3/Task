<?php

use App\Http\Controllers\QRcodController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['auth','user'])->group(function(){
    // Route::get('users/profile',Usercontroller::class)->name('users.edit-profile');
    // Route::post('users/profile',Usercontroller::class)->name('users.update-profile');;

    Route::get('users/profile',[Usercontroller::class,'edit'])->name('users.edit-profile');
    Route::put('users/profile',[Usercontroller::class,'update'])->name('users.update-profile');

    // Route::post('users/create',[Usercontroller::class,'create'])->name('users.create');

    Route::post('/create','Usercontroller@store');
    Route::get('/create', 'Usercontroller@create');



// });s

Route::get('users/QRCode',[QRcodController::class,'index'])->name('users.QRcode');

Route::get('/indexuser',[Usercontroller::class,'index'])->name('user.indexs');
Route::get('/indexuser',[Usercontroller::class,'index'])->name('user.indexs');


