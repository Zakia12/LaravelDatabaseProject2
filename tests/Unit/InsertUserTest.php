<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $OriginalCount=User::count();
        factory(\App\User::class, 1)->create();
        $this->assertEquals($OriginalCount+1,User::count());
    }
}
