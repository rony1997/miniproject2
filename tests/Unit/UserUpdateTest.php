<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\User;
use App\Car;


class UserUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   public function testBasicTest()
   {
       $this->assertTrue(true);

       /*
           $user=factory(\App\User::class)->create();
              $this->assertDatabaseHas('users',["name"=>"Mr. Jacinto Padberg"]);
          }
          public function testBasicTest2()
          {
              $user=factory(\App\User::class)->create(['name'=>'Steve Smith']);
              dd($user);

          }*/
   }
}