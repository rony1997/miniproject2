<?php

namespace Tests\Unit;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Car;
use App\User;



class DeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       // $this->assertTrue(true);

         $car=Car::find(51);
        DB::table( 'cars')->where('id','>',50)-> delete();
         $cars = Car::all();
         $this->assertDatabaseMissing('cars',['id'=>'51']);
    }

}
