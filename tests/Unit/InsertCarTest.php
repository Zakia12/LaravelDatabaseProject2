<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
use Carbon\Carbon;


class InsertCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = factory(Car::class)->create();
        $this->assertTrue($car->save());

    }
}
