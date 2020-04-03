<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderHistoryPrism extends Model
{
    protected $table = "orders";

    protected $primaryKey = 'id';

    protected $fillable =[
    
    ];

    public static $rules = [];

}
