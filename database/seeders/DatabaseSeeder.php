<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@clean-me.com',
             'is_admin' => true,
         ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@clean-me.com',
            'is_admin' => false,
        ]);

        $this->call([
            SubscriptionSeeder::class,
            CategorySeeder::class,
            TaskSeeder::class,
        ]);
    }
}
