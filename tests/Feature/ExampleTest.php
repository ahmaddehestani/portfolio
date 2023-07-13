<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $string ="edit_post";
        $string ="edit_user";

//      $permission=Permission::find(3);
        $user=User::find(1)-> hasPermission($string);




dd($user);
    }
}
