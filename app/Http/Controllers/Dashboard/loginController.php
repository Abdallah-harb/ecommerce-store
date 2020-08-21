<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\AdminLoginRequest;


class loginController extends Controller
{
    //admin login form
    public function login(){
        return view('dashboard.auth.login');
    }
    //admin post login
    public function postLogin(AdminLoginRequest $request){

        //check
        $remember_me = $request->has('remember_me')?true:false;
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with(['error'=>'هناك خطأ فى البيانات']);

    }
}
