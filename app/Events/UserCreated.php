<?php

namespace App\Events;

class UserCreated
{
  
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $user;

    /**
     * @param $user
     */
    public function __construct($request , $user)
    {
        $this->user = $user;
        $this->request = $request;
    }

}
