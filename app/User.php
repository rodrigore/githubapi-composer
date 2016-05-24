<?php

namespace App;

class User
{
    private $attributes;

    public function __construct($user)
    {
        $this->attributes = $user;
    }

    public function getUsername()
    {
        return $this->attributes->name;
    }
}
