<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datos = [
            ['title' => 'Dato 1'],
            ['title' => 'Dato 2'],
            ['title' => 'Dato 3'],
            ['title' => 'Dato 4'],
        ];
        return view('contactos', compact('datos'));            
        
    }
}
