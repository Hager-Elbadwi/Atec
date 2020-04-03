<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Filter extends Model
{
    use SoftDeletes;

    public $table = 'filter';
    
    protected $primaryKey = 'id';

    public $fillable = [
        'text',
        'parent_id',
        'status',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'bigInteger',
        'text' => 'string',
        'parent_id' => 'bigInteger',
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
        'text' => 'required',
        'parent_id' => 'required',
        'status' => 'required',
        // 'updated_at' => 'required',
        // 'created_at' => 'required',
        // 'deleted_at' => 'required',
    ];
    
    public function scopeParent($query)
    {
        return $query->where('parent_id', 0);
    }

    public function scopeChild($query)
    {
        return $query->where('parent_id', '!=', 0);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeTrash($query)
    {
        return $query->where('deleted_at', '!=', null);
    }

    public function children()
    {
        return $this->hasMany('App\Models\Filter', 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Filter', 'parent_id', 'id');
    }
}
