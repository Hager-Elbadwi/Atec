<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    protected $table = "orders_history";

    protected $primaryKey = 'id';

    protected $fillable =[
     'id',
     'user_id',
     'consignee_id',
     'employee_id',
     'refraction',
     'lens_id',
     'lens_type',
     'created_at',
     'updated_at',
     'deleted_at'
    ];

    public static $rules = [];

    
    public function specifications()
    {
        return $this->hasMany('App\Models\OrderHistorySpecifications', 'order_id', 'id');
    }
    public function employee()
    {
        return $this->belongsTo('App\Models\Employee', 'employee_id', 'id');
    }
    public function consignee()
    {
        return $this->belongsTo('App\Models\Consignee', 'consignee_id', 'id');
    }

    public function lens()
    {
        return $this->belongsTo('App\Models\Lens', 'lens_id', 'id');
    }

}
