<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \File;


class Task extends Model
{
    protected $guarded = []; 

  

    public function casts()
    {

        return $this->hasMany('App\Task');

       /*  return $this->belongsTo('App\Casts', 'FK_Casts');
 */
     
    }
}

