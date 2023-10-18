<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {

    }

    public function login() {
        return view('layouts.login');
    }

    public function setLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Xin vui lòng kiểm tra lại email',
            'password.required' => 'Mật khẩu bắt buộc phải nhập',

        ]);

        $email = $request->email;
        $password = $request->password;
//        $passwordHasd = $this->users->logInUser($email);
//        if (password_verify($password, $passwordHasd)) {
//            return redirect()->route('home')->with('msg', 'Đăng nhập thành công');
//        }


    }
    public function register() {
        return view('layouts.register');
    }

    public function setRegister(Request $request) {
        $request->validate([
            'first-name' => 'required',
            'user-name' => 'required',
            'tel' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'repeat-password' => 'required|min:8',
        ], [
            'first-name.required' => 'Họ đệm bắt buộc phải nhập',
            'user-name.required' => 'Tên bắt buộc phải nhập',
            'tel.required' => 'Số điện bắt buộc phải nhập',
            'address.required' => 'Địa chỉ bắt buộc phải nhập',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Xin vui lòng kiểm tra lại email',
            'password.required' => 'Mật khẩu bắt buộc phải nhập',
            'password.min' => 'Mật khẩu phải lớn hơn 8 ký tự',
            'repeat-password.required' => 'Nhập lại mật khẩu không được bỏ trống',
            'repeat-password.min' => 'Nhập lại mật khẩu phải lớn hơn 8 ký tự',

        ]);
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
