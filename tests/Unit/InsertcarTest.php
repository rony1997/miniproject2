<?php

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\User;
use App\Car;


class InsertcarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testcarinsert()
    {
        $Car = factory(\App\Car::class)->make();
        $this->assertDatabaseHas('cars',["make"=>"Ford"]);
        //dd($user);
    }
}
