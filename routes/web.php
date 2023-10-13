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

Route::get('/login', function () {
    return view('layouts.login');
});
Route::get('/', function () {
    return view('layouts.signup');
});


Route::name('admin')->group(function () {

    Route::get('admin/home', function () {
       return view('admin.home');
    })->name('home');
    Route::get('admin/calendar', function () {
        return view('admin.calendar');
    })->name('calendar');
    Route::get('admin/managerUser', function () {
        return view('admin.managerUser');
    })->name('managerUser');
    Route::get('admin/addUser', function () {
        return view('admin.addUser');
    })->name('addUser');


});

Route::name('user')->group(function () {

    Route::get('user/home', function () {
        return view('user.home');
    })->name('home');

});

