<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilterLenses extends Model
{
    public $table = 'filter_lenses';
    
    protected $primaryKey = 'id';

    public $fillable = [
        'filter_id',
        'lens_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'bigInteger',
        'name' => 'string',
        'lens_id' => 'bigInteger',
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
        'lens_id' => 'required',
        'status' => 'required'
    ];
    
    public $timestamps      =  false;
    
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

    public function children()
    {
        return $this->hasMany('App\Models\Filter', 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Filter', 'parent_id', 'id');
    }
}
