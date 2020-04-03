<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';
    
    protected $primaryKey = 'id';

    public $fillable = [
        'lens_id',
        'name',
        'deleted_at',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeInActive($query)
    {
        return $query->where('status', 0);
    }

    public function scopeAvailable($query)
    {
        return $query->where('deleted_at', null);
    }

    public function scopeTrash($query)
    {
        return $query->where('deleted_at', '!=', null);
    }
}
