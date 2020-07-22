<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class Mail extends Mailable
{
    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    { 
        return $this->view('mail.contact-us')
            ->subject('AAAA')
            ->with([
                'name' => 'teststets',
            ]);;

            // var_dump($this->view());
            // die();
    }
}