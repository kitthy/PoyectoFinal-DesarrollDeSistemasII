<?php

namespace App\Http\Controllers;

//use App\Mail\MensajeRecibido;
use Illuminate\Http\Request;
//use Illuminate\support\Facades\Mail;

class mensajeController extends Controller
{
    public function store(Request $request)
    //public function store()
    {
        //return request('email');
       // return $request; //->get('email');
       request()->validate([
           'name'=> 'required',
           'email'=> ['required','email'],
           'subject'=> 'required',
           'content'=> 'required|min:3'
       ],[

            'name.required'=> 'Debes ingresar tu Nombre',
            'email.required'=> 'Debes ingresa un email',
            'subject.required'=> 'Debes ingresar un Tema',
            'content.required'=> 'Debes ingresar el contenido del tema',
            
       ]);

       //enviar el email  
      //Mail::to('creacionesanchez@hotmail.com')->queue(new MensajeRecibido($message));

       return back()->with('status', 'Recibimos tu mensaje! Te responderemos en 24 horas');
    }
}
