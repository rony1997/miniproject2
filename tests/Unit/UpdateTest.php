<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\User;
use App\Car;


class UpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testcarupdate()
    {
        $Car = factory(\App\Car::class)->create(['year'=>'2000']);
        $this->assertDatabaseHas('cars',["year"=>"2000"]);
        //dd($user);
    }
}
