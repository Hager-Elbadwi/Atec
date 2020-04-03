<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Spatie\Permission\Traits\HasRoles;


class AuthController extends Controller
{
	
    public function login()
    {
    	return view('admin::pages.auth.login');
    }

    public function postLogin(Request $request)
    {
		
		$credentials = $request->validate([
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    	]);

    	if (Auth::guard('admin')->attempt($credentials)) {
    		return redirect()->route('admin.dashboard');
    	} else {
    		return redirect()->route('admin.login')->with('msg', 'Wrong Credentials!');
    	}
    }

    public function logout()
    {
    	Auth::guard('admin')->logout();

    	return back();
    }
}
