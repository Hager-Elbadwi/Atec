<?php

namespace App\Modules\Customer\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use App\Models\User;



class CustomerController extends Controller
{
    
    public function home(Request $request)
    {
        return view('customer::pages.home');
    }

    public function information()
    {
        $user = User::where('id', auth()->id())->first();

        return $user;
    }

    public function setting()
    {
        $user = User::where('id', auth()->id())->first();

        return $user;
    }


    public function update(Request $request, $id)
    {
        return $request;
    }
}
