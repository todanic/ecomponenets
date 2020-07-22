<?php

namespace App\Events;

class EmailEvent
{
    public $email;

		/**
		 * 
		 */
    public function __construct($email)
    {
        $this->email = $email;
    }
}