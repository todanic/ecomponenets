<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class Mail extends Mailable
{
    /**
     * Build the messages.
     *
     * @return $this
     */

    public function __construct($name, $email, $phone, $country, $messages, $img)
    {
        $this->name = $name;
        $this->country = $country;
        $this->email = $email;
        $this->phone = $phone;
        $this->messages = $messages;
        $this->img = $img;
    }

    public function build()
    { 
        return $this->view('mail.contact-us')
            ->subject('Support')
            ->with([
                'name' => $this->name,
                'phone' => $this->phone,
                'country' => $this->country,
                'messages' => $this->messages,
                'email' => $this->email,
                'img' => $this->img
            ]);;

            // var_dump($this->view());
            // die();
    }
}