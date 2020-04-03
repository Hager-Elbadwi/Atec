<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Support\Str;
class Paragraph extends Model 
{
    use Translatable;

    protected $table  = 'paragraphs';

    protected $primaryKey  = 'id';

    public $translatedAttributes=  ['text', 'style_text'];

    protected $fillable = ['page_id'];

    public static $rules = [

        'en.text'  =>     'required',
        'ar.text'  =>     'required',
  
        'en.style_text' => 'required',
        'ar.style_text' => 'required',
  
        
    ];

    protected $casts = [
        'id'      =>   'integer',
        'text_en' =>   'string',
        'text_ar' =>   'string',
        'style_text_en' =>   'string',
        'style_text_ar' =>   'string'
        
    ];



    
    public function scopeSorted($query, $type='asc')
  {
      return $query->orderBy('paragraphs.id', $type);
  }

  public function page()
  {
      return $this->belongsTo('App\Models\Page', 'id', 'page_id');
  }
}
