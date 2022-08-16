<?php

namespace Tests\api\v1;

use App\Http\Controllers\API\v1\UsersController as V1UsersController;
use App\Http\Controllers\API\v2\UsersController as V2UsersController;
use PHPUnit\Framework\TestCase;

class UsersTest extends TestCase
{
    public function testCreateUserInApiV1()
    {
        $user = new V1UsersController();
        $userCreate = $user->Add();
        $this->assertEquals($userCreate, 1);
    }

    public function testCreateUserInApiV2()
    {
        $user = new V2UsersController();
        $userCreate = $user->Add();
        $this->assertEquals($userCreate, 1);
    }
}
