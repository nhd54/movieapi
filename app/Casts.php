<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \File;
class Casts extends Model
{
   /*  protected $guarded = []; */


    public function Movie()
{
  /*   return $this->hasMany('App\Task'); */

    return $this->belongsTo('App\Casts', 'FK_Movies');
}
}


