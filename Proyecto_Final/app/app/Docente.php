<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $guarded =[];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
