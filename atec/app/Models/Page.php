<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Page extends Model implements TranslatableContract

{
    use Translatable;
    
    protected $table = "pages";
    
    protected $primaryKey = 'id';

    protected $fillable  =['name'];
  
    public $translatedAttributes =  ['title', 'keywords' ,	'meta_desc'];
   
    public $timestamps = false;

    public static $rules = [

        'name'        =>     'required',

        'en.title'    =>     'required',
        'ar.title'    =>     'required',

        'en.keywords'   =>   'required',
        'ar.keywords'   =>   'required',

        'en.meta_desc'  =>   'required',
        'ar.meta_desc'  =>   'required',
    ];

    public function scopeSorted($query, $type='asc'){

      return $query->orderBy('pages.id', $type);

  }

  public function images(){

      return $this->hasMany('App\Models\PageImage','page_id','id');

  }

  public function paragraphs()

  {
      return $this->hasMany('App\Models\Paragraph', 'page_id', 'id');
  }

}
