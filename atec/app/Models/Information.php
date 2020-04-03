<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Information extends Model implements TranslatableContract
{

    use Translatable;

    protected $table = "informations";

    protected $primaryKey = 'id';

    protected $fillable =['name'];

    public $translatedAttributes =  ['name','text'];
   
    public $timestamps = false;

    public static $rules = [

        'name'        =>     'required',

        'en.text' => 'required',
        'ar.text' => 'required'
    ];

    public function scopeSorted($query, $type='asc'){

      return $query->orderBy('info.id', $type);

  }

}
