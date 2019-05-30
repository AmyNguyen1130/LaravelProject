<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $mailto;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $mailto, $subject)
    {
        $this->data = $data;
        $this->mailto = $mailto;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ewd.notification@gmail.com')->subject('[Dormitory] [Electricity and Water Bills] [' . $this->data['bill_month'] . ']')->view('emailTemp')->with('data', $this->data);
    }
}


