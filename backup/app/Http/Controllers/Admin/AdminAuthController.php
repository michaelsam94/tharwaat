<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }

    public function authenticateAdmin(Request $request)
    {
        if(auth()->guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            return redirect(RouteServiceProvider::ADMIN);
        }else{
            session()->flash('error', 'Invalid Credentials');
            return redirect()->back();
        }
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect(RouteServiceProvider::ADMINLOGIN);
    }
}
