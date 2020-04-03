<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\Customer as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Hash;
class Diameter extends Model
{
    protected $table = "diameters";

    protected $primaryKey = 'id';

    protected $fillable = ['value'];



    public static $rules = [
     
    'value'        =>   'required', 
  
   ];

  
}
