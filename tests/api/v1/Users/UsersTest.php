<?php

namespace Tests\api\v1\Users;

use Tests\TestCase;

class UsersTest extends TestCase
{
    public function test_ShouldCreateAUser()
    {
        $response = $this->call('POST', 'api/v1/users', [
            'fullname' => 'Ahmadreza Fatemikia',
            'email' => 'ahmadrezafatemikia@gmail.com',
            'mobile' => '09931398492',
            'password' => '0200741063'
        ]);
        $this->assertEquals(201, $response->status());
        $this->seeJsonStructure([
            'success',
            'message',
            'data' => [
                'fullname',
                'email',
                'mobile',
                'password'
            ],
        ]);
    }

    public function test_throwexp_when_parameters_send_empty()
    {
        $response = $this->call('POST', 'api/v1/users', [
            'fullname' => '',
            'email' => '',
            'mobile' => '',
            'password' => ''
        ]);
        $this->assertEquals(422, $response->status());
    }
}
