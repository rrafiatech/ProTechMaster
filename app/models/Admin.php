<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
class Admin extends Eloquent
implements UserInterface, RemindableInterface
{
    protected $table  = "admins";
    protected $hidden = ["password"];
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function getReminderEmail()
    {
        return $this->email;
    }
}