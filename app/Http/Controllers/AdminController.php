<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

    }
    public function managerUsers() {
        return view('admin.managerUser');
    }
    public function managerCalendar() {
        return view('admin.calendar');
    }

    public function addUser() {
        return view('admin.addUser');
    }


}
