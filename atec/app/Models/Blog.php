<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HelperTrait;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Blog extends Model
{
    use HelperTrait, Translatable;

    /**
     * Table name.
     * 
     * @var string
     */
    protected $table = 'blogs';

    /**
     * Primary key.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Translated attributes.
     * 
     * @var array
     */
    public $translatedAttributes =  ['title', 'description'];

    /**
     * Fillable fields.
     * 
     * @var array
     */
    protected $fillable = [
        'type', 'status', 'video', 'photo' 
    ];

    /**
     * Timestamps.
     * 
     * @var string
     */
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Scope a query to order data.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $type    ['asc', 'desc']
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSorted($query, $type='asc')
    {
        return $query->orderBy('blogs.id', $type);
    }

    public function setPhotoAttribute($file)
    {   
        if ($file) {
              $fileName = $this->createFileName($file);
              $this->mediumImage($file, $fileName, '260', '130');

              $this->attributes['photo'] = $fileName;
        }
    }

}
