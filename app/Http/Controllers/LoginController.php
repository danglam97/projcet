<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view('Admin.Login.login');
    }
    public function postlogin(Request $request)
    {
//        dd('aaaaâ');
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
        return redirect()->route('quan-tri.admin');
        }else{
            return redirect()->route('dang_nhap');
        }

    }
    public function logout()
    {
     Auth::logout();
     return redirect()->route('dang_nhap');
    }
}
