<?php

namespace App\Listeners;

use App\Events\EmailEvent;
use App\Jobs\SendEmailNotification;

class EmailListener
{
    /**
     * Handle the event.
     *
     * @param EmailEvent $event
     *
     * @return void
     */
    public function handle(EmailEvent $event)
    {
        dispatch(new SendEmailNotification($event->email, $event->name, $event->phone, $event->country, $event->messages));
    }
}