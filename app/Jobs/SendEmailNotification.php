<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mail as Email;

class SendEmailNotification implements ShouldQueue
{
	use Queueable, InteractsWithQueue;

        protected $email;
        protected $name;
        protected $country;
        protected $phone;
        protected $messages;

    public function __construct($email, $name, $phone, $country, $messages)
    {
        $this->email = $email;
        $this->name = $name;
        $this->phone = $phone;
        $this->country = $country;
        $this->messages = $messages;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //env variable!
		Mail::to('teodoraodanic96@gmail.com')->send(new Email($this->name, $this->email, $this->phone, $this->country, $this->messages));
    }
}