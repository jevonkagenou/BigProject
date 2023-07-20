<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($invitationLink)
    {
        $this->invitationLink = $invitationLink;
    }

    public function build()
    {
        return $this->view('email.InvitationLink')
                    ->subject('Undangan Untuk Bergabung');
    }
}
