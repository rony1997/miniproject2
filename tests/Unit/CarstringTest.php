<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\User;
use App\Car;


class CarstringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $car=Car::all();
        $car=Car::find(22);
        $this->assertInternalType('string',$car->model);
        //dd($user);
    }
}
