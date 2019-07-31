<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarYearInteger extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarYearInteger()
    {
        $car = Car::inRandomOrder()->first();

        $this->assertIsInt($car->Year);
    }
}
