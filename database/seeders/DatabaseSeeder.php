<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  \App\Models\User::factory(10)->create(); //Random 10 seeds

    //     \App\Models\User::factory()->create([ // define factory seed
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //         'password' => '123',
    //         'profile' => '0',
    //     ]);

        $this->call([
            UserSeeder::class,
            FornecedorSeeder::class,
            ClienteSeeder::class,
            ProdutoSeeder::class,
        ]);



     }
}
