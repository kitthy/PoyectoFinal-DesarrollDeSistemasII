<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $per = array("Camel" => "Antiguo", "Malboro" => "Rojo", "Lm" => "Menta", "Essence" => "Doble click");
        Return view ('servicio', compact('per'));
    }
}
