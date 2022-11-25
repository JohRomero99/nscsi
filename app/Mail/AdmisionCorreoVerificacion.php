<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;
use MailerSend\MailerSend;
use MailerSend\Helpers\Builder\Recipient;
use MailerSend\Helpers\Builder\EmailParams;
use MailerSend\Helpers\Builder\Variable;
use MailerSend\Helpers\Builder\Personalization;
use MailerSend\LaravelDriver\MailerSendTrait;

class AdmisionCorreoVerificacion extends Mailable
{
    use Queueable, SerializesModels, MailerSendTrait;
    public $name;
    public $lastname;
    public $code;
    //public $subject = 'Correo Verificacion';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $lastname, $code)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $to = Arr::get($this->to, '0.address');

        return $this->view('emails.admision.confirmacion_code')
            
            ->mailersend(
                // Template ID
                null,
                // Variables for simple personalization
                [
                    new Variable($to, ['name' => 'Soporte tecnico'])
                ],
                // Tags
                ['tag'],
                // Advanced personalization
                [
                    new Personalization($to, [
                        'var' => 'variable',
                        'number' => 123,
                        'object' => [
                            'key' => 'object-value'
                        ],
                        'objectCollection' => [
                            [
                                'name' => 'John'
                            ],
                            [
                                'name' => 'Patrick'
                            ]
                        ],
                    ])
                ]
        );
    
//->attachFromStorageDisk('public', '/imagenes/VirgenNSC.png')
        //return $this->view('emails.admision.confirmacion_code')->with(['name' => $this->name]);
    }
}
