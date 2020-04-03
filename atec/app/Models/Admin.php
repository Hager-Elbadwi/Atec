<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

use Hash;
class Admin extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $table = "admins";

    protected $fillable =['email','password','name'];

    protected $hidden = ['password', 'remember_token',];
   
    protected $casts = ['email_verified_at' => 'datetime'];

    public static $rules = [
     
    'email'        =>   'required|email', 
    'password'     =>   'required|confirmed|min:8',
    'name'         =>   'required',

   ];


   public function setPasswordAttribute($value)
    {
    	if ($value) {
	        $this->attributes['password'] = Hash::make($value);
    	}
    }

}


 
