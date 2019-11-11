<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

use App\Mail\Inline;

class ContactEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $admin;
    public $guest;

    public $inline;
    public $portalLink;


    public function __construct($guest)
    {
        $this->guest = $guest;

        $this->admin = (object) [
            'name' =>  Config::get('app.admin.name'),
            'email' => Config::get('app.admin.email')
        ];

        $this->inline = new Inline;

        $this->portalLink = url('/');
    }

    public function build()
    {
        return $this->view('emails.contact')
            ->from(Config::get('mail.from.address'))
            ->to($this->admin->email)
            ->subject($this->guest->message->subject)
            ->replyTo($this->guest->email);
    }
}
