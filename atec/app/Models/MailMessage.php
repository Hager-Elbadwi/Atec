<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\Customer as Authenticatable;
use Illuminate\Notifications\Notifiable;

class MailMessage extends Model
{
    protected $table = "mail_messages";

    protected $primaryKey = 'id';

    protected $fillable =['title','body','msg','input_name','link'];

    protected $casts = ['email_verified_at' => 'datetime'];
    
    public $timestamps = false;

    public static $rules = [
     
    'title'            =>   'required', 
    'body'             =>   'required',
    'msg'              =>   'required',
    'input_name'       =>   'required',
    'link'             =>   'required',
    

   ];


  
    
}
