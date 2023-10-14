<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

    }

    public function calendar() {
        return view('user/calendar');
    }

    public function inforCaseRecord() {
        return view('user/calendar');
    }

    public function consultative() {
        return view('user/calendar');
    }
}
