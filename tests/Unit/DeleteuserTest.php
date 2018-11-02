<?php

namespace Tests\Unit;
use Illuminate\Support\Facades\DB;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\User;
use App\Car;



class DeleteuserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user=factory(\App\User::class)->create();
        $this->assertDatabaseHas('users',["name"=>"Ardith Kuhic"]);
    }
    public function testBasicTest1()
    {
        $user=factory(\App\User::class)->create(['name'=>'Steve Smith',
            ]);
        $this->assertDatabaseHas('users',["name"=>"Steve Smith"]);
    }
    public function testBasicTest2()
    {
        $user=User::find(44);
        //$user->delete();
        $users=User::all();
        $this->assertDatabaseMissing('users',['id'=>'44']);
    }

}
