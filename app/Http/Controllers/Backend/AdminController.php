<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        dd($request->all());
    }
}
