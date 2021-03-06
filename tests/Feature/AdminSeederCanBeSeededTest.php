<?php

namespace Tests\Feature;

use Database\Seeders\AdminSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminSeederCanBeSeededTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_user_can_be_seeded()
    {
        if (! $this->assertDatabaseHas('users', ['email' => 'admin@clearme.test'])) {
            $this->seed(AdminSeeder::class);
        }
    }

    public function test_database_has_admin_account()
    {
        $this->assertDatabaseHas('users', ['email' => 'admin@clearme.test']);
    }
}
