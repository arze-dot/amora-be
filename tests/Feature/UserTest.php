<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testRegisterSuccess()
    {
        $this->post('/api/users', [
            'username' => 'testEzra',
            'password' => 'passwordEzra',
            'name' => 'Ezra'
        ])->assertStatus(201)
            ->assertJson([
                "data" => [
                    'username' => 'testEzra',
                    'name' => 'Ezra'
                ]
            ]);
    }

    public function testRegisterFailed()
    {
        $this->post('/api/users', [
            'username' => '',
            'password' => '',
            'name' => ''
        ])->assertStatus(400)
            ->assertJson([
                "errors" => [
                    'username' => [],
                    'name' => [],
                    'password' => [],
                ]
            ]);
    }

    // public function testRegisterUsernameExist()
    // {
    // }
}
