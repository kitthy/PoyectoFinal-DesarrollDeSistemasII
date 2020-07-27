<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $guarded =[];
    
    public function getRouteKeyName()
   {
       return 'id';
   }
}
