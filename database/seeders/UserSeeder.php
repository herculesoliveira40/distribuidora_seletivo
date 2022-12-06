<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
            //     \App\Models\User::factory()->create([ // define factory seed
            //         'name' => 'Test User',
            //         'email' => 'test@example.com',
            //         'password' => '123',
            //         'profile' => '0',
            //     ]);

       User::factory(10)->create(); //Random 10 seeds


     }
}
