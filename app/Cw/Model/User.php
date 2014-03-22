<?php

namespace Cw\Model;

use Illuminate\Auth\UserInterface;
use Illuminate\Database\Eloquent\Model;
use Chatwork\Users\UserInterface as ChatworkUserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Model implements
    UserInterface,
    CwUserInterface,
    RemindableInterface
{

    protected $name = 'tan-yuki';

    public function getName()
    {
        return $this->name;
    }

}
