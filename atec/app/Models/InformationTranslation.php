<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationTranslation extends Model
{
    protected $table = 'information_translations';

    protected $primaryKey = 'trans_id';

    protected $fillable = ['name','text'];

    public $timestamps = false;

}
