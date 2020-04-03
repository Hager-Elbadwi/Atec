<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /**
     * Table name.
     * 
     * @var string
     */
    protected $table = 'languages';

    /**
     * Primary key.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Fillable fields.
     * 
     * @var array
     */
    protected $fillable = [
        'locale', 'name', 'dir', 'status', 
    ];

    /**
     * Timestamps.
     * 
     * @var boolean
     */
    public $timestamps = false;

  
    public function scopeSorted($query, $type='asc')
    {
        return $query->orderBy('languages.id', $type);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
