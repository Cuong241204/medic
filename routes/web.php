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

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'setLogin']);

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'setRegister']);

Route::get('welcome', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {

    Route::get('/home', [AdminController::class, 'managerUsers'])->name('managerUsers');

    Route::get('/calendar', [AdminController::class, 'managerCalendar'])->name('managerCalendar');


    Route::get('/addUser', [AdminController::class, 'addUser'])->name('addUser');


});

Route::prefix('user')->group(function () {

    Route::get('/calendar', [UserController::class, 'calendar'])->name('calendar');
    Route::get('/infor', [UserController::class, 'inforCaseRecord'])->name('infor');
    Route::get('/message', [UserController::class, 'message'])->name('message');

});

