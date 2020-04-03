<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Hash;
class Consignee extends Authenticatable
{
    
    protected $table = "consignees";

    protected $primaryKey = 'id';

    protected $fillable =['name','status'];

    protected $hidden = ['password', 'remember_token',];
   
    protected $casts = ['email_verified_at' => 'datetime'];

    public static $rules = [
     
    'name'              =>   'required',
    
   ];


   public function setPasswordAttribute($value)
    {
    	if ($value) {
	        $this->attributes['password'] = Hash::make($value);
    	}
    }

   
}
