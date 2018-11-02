<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\User;
use App\Car;


class CountCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function testBasicTest1()
    {
        $cars = car::all();
        $cars->count();
        $this->assertEquals(51, count($cars), "Should return 50 users");
    }
}