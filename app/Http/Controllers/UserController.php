<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

    }

    public function login() {
        return view('layouts.login');
    }

    public function register() {
        return view('layouts.register');
    }

    public function calendar() {
        return view('user/calendar');
    }

    public function inforCaseRecord() {
        return view('user/infor');
    }

    public function message() {
        return view('user/message');
    }

    public function consultative() {
        return view('user/calendar');
    }
}
