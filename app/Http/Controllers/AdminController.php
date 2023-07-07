<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // admin home

    public function adminHome(){
        return view('admin.home');
    }

    // admin login page

    public function login(){
        return view('admin.login');
    }

    // admin login submit

    public function loginsubmit(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

            $admin = Admin::where("username", $request->username)->where("status", 1)->first();


            if($admin  && (Hash::check($request->password, $admin->password)))
            {
                session(['adminSess' => $admin]);
                return redirect()->route('admin.home')->with('success', 'Admin Login Successful');
            }
            else
            {
                return redirect()->route('admin.login')->with('error', 'Invalid username/password!');
            }
    }

    // admin logout

    public function adminlogout()
    {
        session()->forget('adminSess');
        return redirect()->route('admin.login');
    }



}
