<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class matriculacionCreedencialesMarkdown extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;
    public $nuevoUsuarioContrasena;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usuario, $nuevoUsuarioContrasena)
    {
        $this->usuario = $usuario;
        $this->nuevoUsuarioContrasena = $nuevoUsuarioContrasena;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.matriculacion.creedenciales');
    }
}
