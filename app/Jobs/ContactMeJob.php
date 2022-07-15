<?php

namespace App\Jobs;

use App\Mail\ContactMeMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactMeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $subject;
    protected $message;
    public $toEmail;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $subject, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
        $this->toEmail = config('app.admin_email');
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info(self::class . ' ::: Sending Contact email to admin.');
        $email = new ContactMeMail($this->name, $this->email, $this->subject, $this->message);
        Mail::to($this->toEmail)->send($email);
        Log::info(self::class . ' ::: Contact Email sent to admin.');
    }
}
