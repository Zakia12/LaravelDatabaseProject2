<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class InsertCarTst extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $OriginalCount=Car::count();
        factory(\App\Car::class, 1)->create();
        $this->assertEquals($OriginalCount+1,Car::count());
    }

    public function testCarYearInteger()
    {
        $car = Car::inRandomOrder()->first();

        $this->assertIsInt($car->Year);
    }

}
