<?php

namespace App\Mail;

use app\ContactMe;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactMe $contact)
    {
        $this->contact = $contact;

        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact_me');
    }
}
