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

class AdmisionCorreoUsername extends Mailable
{
    use Queueable, SerializesModels, MailerSendTrait;
    public $name;
    public $lastname;
    public $username;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $lastname, $username)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->username = $username;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $to = Arr::get($this->to, '0.address');

        return $this->view('emails.admision.username')
            
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
    }
}
