<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\User;
use App\Car;


class CarmodelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $cars=Car::all();
        $car=Car::inRandomOrder()->first();
        if($car->make="Honda")
            $this->assertTrue(true);
        else if($car->make="Toyota")
            $this->assertTrue(true);
        else($car->make="Ford");
            $this->assertTrue(true);

    }
}
