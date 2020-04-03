<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lens extends Model
{
    use SoftDeletes;
    
    public $table = 'lenses';
    
    protected $primaryKey = 'id';

    public $fillable = [
        'name',
        'status',
        'deleted_at'
    ];

    public $timestamps = false;

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'bigInteger',
        'name' => 'string',
        'status' => 'tinyInteger',
        'updated_at' => 'timestamp',
        'created_at' => 'timestamp',
        'deleted_at' => 'timestamp',
        
    ];


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'status' => 'required',
        // 'updated_at' => 'required',
        // 'created_at' => 'required',
        // 'deleted_at' => 'required',
    ];
    
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeAvailable($query)
    {
        return $query->where('deleted_at', null);
    }
    
    public function scopeTrash($query)
    {
        return $query->where('deleted_at', '!=', null);
    }

    public function options()
    {
        return $this->belongsToMany('App\Models\Filter', 'filter_lenses', 'lens_id', 'filter_id');
    }
}
