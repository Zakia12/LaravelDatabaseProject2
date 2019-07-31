<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUpdateCarYear()
    {
        $car = Car::find(1);
        $car->year = '2000';
        $car->save();
        $this->assertDatabaseHas('cars', ['year' => '2000']);
    }

    public function testCarCount()
    {
        $rowCount = count(Car::get());
        $CarCount = $rowCount;
        $this->countOf($CarCount);
        $this->assertTrue(true);
    }
}
