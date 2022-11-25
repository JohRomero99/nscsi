<?php

namespace App\Mail;

use App\Models\pasarelaPagos\cob_voucher;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PagoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $voucher;
    public $diferido;
    public $subject = "Nuestra Señora del Carmen";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($voucher, $diferido)
    {
        $this->voucher = $voucher;
        $this->diferido = $diferido;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('representante.emails.pago');

    }
}
