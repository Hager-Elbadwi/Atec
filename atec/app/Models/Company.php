<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Hash;
class Company extends Authenticatable
{
    protected $table = "companies";

    protected $primaryKey = 'id';

    protected $fillable =['first_name','last_name','name','email','phone','address','password','status'];

    protected $hidden = ['password', 'remember_token',];
   
    protected $casts = ['email_verified_at' => 'datetime'];

    public static $rules = [
     
    'first_name'        =>   'required', 
    'last_name'         =>   'required',
    'name'              =>   'required',
    'email'             =>   'required|email',
    'phone'             =>   'required',
    'address'           =>   'required',
    'password'          =>   'required|confirmed',

   ];


   public function setPasswordAttribute($value)
    {
    	if ($value) {
	        $this->attributes['password'] = Hash::make($value);
    	}
    }

    public function staff()

  {
      return $this->hasMany('App\Staff', 'company_id', 'id');
  }
}
