<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CountUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCountUser()
    {
        $rowcount = count(User::get());
        $Usercount = $rowcount;
        $this->countOf($Usercount);
        $this->assertTrue(true);
    }
}
