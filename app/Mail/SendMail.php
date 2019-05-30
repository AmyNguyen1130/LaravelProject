<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $subject;
    public $emailtemp;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $subject, $emailtemp)
    {
        $this->data = $data;
        $this->subject = $subject;
        $this->emailtemp = $emailtemp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ewd.notification@gmail.com')->subject($this->subject)->view($this->emailtemp)->with('data', $this->data);
    }
}
