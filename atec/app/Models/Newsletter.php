<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = "newsletters";

    protected $primaryKey = 'id';

    protected $fillable =['email'];

    // public $translatedAttributes =  ['title', 'keywords' ,	'meta_desc'];
   


    public static $rules = [

        'email'=>     'required|email',
        
    ];

    public function scopeSorted($query, $type='asc'){

      return $query->orderBy('newsletters.id', $type);

  }

}
