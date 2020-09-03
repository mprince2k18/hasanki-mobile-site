<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminNotifyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $name="";
    public $phone="";

    public function __construct($name, $phone)
    {
        return $this->name = $name;
        return $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name="";
        $phone="";
        return $this->subject('New Enrollment from Hasanik English')
                    ->from('admin@hasanikenglish.com')
                    ->view('mail.notify', compact('name', 'phone'));
    }
}
