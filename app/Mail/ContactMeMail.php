<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMeMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    public $subject;
    public $userdefinedSubject;
    public $message;


    /**
     * ContactUsMail constructor.
     *
     * @param $name
     * @param $email
     * @param $userdefinedSubject
     * @param $message
     */
    public function __construct($name, $email, $userdefinedSubject, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->userdefinedSubject = $userdefinedSubject;
        $this->message = $message;
        $this->subject = ('Contact Mail');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails')->with([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'subject' => $this->userdefinedSubject
        ]);
    }
}