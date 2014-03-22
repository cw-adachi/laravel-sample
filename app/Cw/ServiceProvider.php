<?php

namespace Cw;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

use Cw\Model\User;
use Cw\Repository\UserRepository;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->bind('Cw\Repository\Interfaces\IUserRepository',
            'Cw\Repository\UserRepository');
    }
}
