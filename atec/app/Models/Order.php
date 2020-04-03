<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $table = "orders";

    protected $primaryKey = 'id';

    protected $fillable =[
     'id',
     'user_id',
     'consginee_id',
     'employee_id',
     'refraction',
     'lens_number',
     'sphere',
     'cylinder',
     'axis',
     'Addition',
     'prism_1',
     'base_1',
     'prism_2',
     'base_2',
     'res_prism',
     'res_base',
     'lens_id',
     'product_id',
     'diameter_right',
     'diameter_left',
     'optimized_diameter_right',
     'optimized_diameter_left',
     'created_at',
     'updated_at',
     'deleted_at'
    ];

    public static $rules = [];

}
