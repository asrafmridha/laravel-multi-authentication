<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function adminLoginForm()
    {
        return view('backend.admin.admin_login');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',

        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        } else {
            Session::flash('error-message', 'Invalid Username or Password');
            return back();
        }
    }
}
