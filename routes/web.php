<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('layouts.login');
});
Route::get('/', function () {
    return view('layouts.signup');
});


Route::prefix('admin')->group(function () {

    Route::get('/home', [AdminController::class, 'managerUsers'])->name('managerUsers');

    Route::get('/calendar', [AdminController::class, 'managerCalendar'])->name('managerCalendar');

    Route::get('/managerUser', function () {
        return view('admin.managerUser')->name('adminManagerUser');
    })->name('managerUser');

    Route::get('/addUser', function () {
        return view('admin.addUser');
    })->name('addUser');


});

Route::prefix('user')->group(function () {

//    Route::get('user/home', function () {
//        return view('user.home');
//    })->name('home');

    Route::get('/calendar', [UserController::class, 'calendar'])->name('calendar');

});

