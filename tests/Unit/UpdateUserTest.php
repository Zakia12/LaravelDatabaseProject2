<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdateUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUpdateUser()
    {
        $user = User::find(1);
        $user->name = 'John Smith';
        $user->save();
        $this->assertDatabaseHas('users', ['name'=>'John Smith']);
    }
}
