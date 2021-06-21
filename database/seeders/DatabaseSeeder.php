<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        User::create([
            'name' => 'John Doe',
            'email' => 'user@crms.com',
            'password' => Hash::make('user'),
        ]);

        User::create([
            'name' => 'Allan Doe',
            'email' => 'admin@crms.com',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);

    }
}
