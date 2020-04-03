<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Admin\Http\Requests\UsersRequest;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin::pages.users.index', compact('users'));
    }

    public function show(User $user)
    {
        
        return view('admin::pages.users.show', compact('user'));        
    }


    public function addToTeamVapeMasr(User $user)
    {
        // return $user;
        $user->user = 'vape masr';
        $user->save();
        return redirect()->route('admin.users.show', $user->id)->with('msg', 'Added');
    } 
    public function reomveFromTeamVapeMasr(User $user)
    {
        $user->user = null;
        $user->save();
        return redirect()->route('admin.users.show', $user->id)->with('msg', 'Removed');
    } 
}
