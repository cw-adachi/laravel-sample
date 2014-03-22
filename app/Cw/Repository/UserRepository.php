<?php

namespace Cw\Repository;

use Cw\Repository\Interfaces\IUserRepository;
use Cw\Model\User;

class UserRepository implements IUserRepository
{

    /**
     * @return mixed
     */
    public function findAll()
    {
        return [
            [
                'id'   => 1,
                'name' => 'sato',
            ],
            [
                'id'   => 2,
                'name' => 'suzuki',
            ],
            [
                'id'   => 3,
                'name' => 'tanaka',
            ],
        ];
    }
}
