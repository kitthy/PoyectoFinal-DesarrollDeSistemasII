<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MensajeRecibido extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(msg)
    {
        $this->smg = $smg;
    }
    public function build()
    {
        return $this->view('emails.Mensaje-Recibido');
    }
}
