<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable //implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $theName;
    public $theEmail;
    public $theSubject;
    public $theMessage;

    public function __construct($theName, $theEmail, $theSubject, $theMessage)
    {
        $this->theName = $theName;
        $this->theEmail = $theEmail;
        $this->theSubject = $theSubject;
        $this->theMessage = $theMessage;
    }

    public function build()
    {
        return $this->from('portal@ceie-br.org')->view('emails.contact');
    }
}
