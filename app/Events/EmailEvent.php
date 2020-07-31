<?php

namespace App\Events;

class EmailEvent
{
    public $email;
    public $name;
    public $country;
    public $phone;
    public $messages;
    public $img;

		/**
		 * 
		 */
    public function __construct($email, $name, $phone, $country, $messages, $img)
    {
        $this->email = $email;
        $this->name = $name;
        $this->phone = $phone;
        $this->country = $country;
        $this->messages = $messages;
        $this->img = $img;
    }
}