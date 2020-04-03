<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Employee extends Model
{
    use SoftDeletes;
   
    protected $table  = 'employees';

    protected $primaryKey  = 'id';

    protected $fillable = ['name','user_id'];

    public $timestamps = false;


    public function company()
    {
        return $this->belongsTo('App\Company', 'id', 'company_id');
    }
}
