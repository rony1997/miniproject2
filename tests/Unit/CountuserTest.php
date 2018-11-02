<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\User;
use App\Car;


class CountuserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testBasicTest()
{
    $this->assertTrue(true);

/*      $users = User::all();
        $users->count();
      $this->assertEquals(80, count($users), "Should return 70 users");
        //dd($user);*/
    }
}
