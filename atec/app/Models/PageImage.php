<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HelperTrait;

class PageImage extends Model
{
    use HelperTrait;
    protected $table = 'page_images';

    protected $primaryKey = 'image_id';

    // public $timestamps = false;

    protected $fillable = ['page_id', 'photo'];
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'photo' => 'required|image'

    ];
    
     public function setPhotoAttribute($file)
    {
        if ($file) {
            $fileName = $this->createFileName($file);
            $this->originalImage($file, $fileName, '260', '130');

            $this->attributes['photo'] = $fileName;
      }
    }

    
    public function page()
    {
        return $this->belongsTo('App\Models\Page', 'image_id', 'page_id');
    }
}
