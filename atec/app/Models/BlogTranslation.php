<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogTranslation extends Model
{
    /**
     * Table name.
     * 
     * @var string
     */
    protected $table = 'blog_translations';

    /**
     * Primary key.
     * 
     * @var string
     */
    protected $primaryKey = 'trans_id';

    /**
     * Fillable fields.
     * 
     * @var array
     */
    protected $fillable = ['title', 'description'];

    /**
     * Timestamps.
     * 
     * @var boolean
     */
    public $timestamps = false;
}
