<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderHistorySpecifications extends Model
{
    protected $table = "order_history_specifications";

    protected $primaryKey = 'id';

    protected $fillable =[

    'order_id',
    'product_id',
    'type',
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
    'diameter',
    'optimized_diameter',

    ];

    public static $rules = [];

    /**
     * Timestamps.
     * 
     * @var boolean
     */
    public $timestamps = false;

}
