<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends  Model
{
    /**
 * Table name.
 *
 * @var string
 */
  protected $table = 'page_translations';

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
  protected $fillable = ['title', 'keywords' ,	'meta_desc'];

  /**
   * Timestamps.
   *
   * @var boolean
   */
  public $timestamps = false;
}

