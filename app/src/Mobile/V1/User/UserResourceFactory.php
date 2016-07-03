<?php
namespace App\Mobile\V1\User;

class UserResourceFactory
{

    public function __invoke()
    {
        return new UserResource([
            [
                'id' => 1,
                'name' => 'Amelia',
            ],
            [
                'id' => 2,
                'name' => 'Antonio',
            ],
        ]);
    }

}