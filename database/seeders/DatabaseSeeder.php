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
        User::create([
            'name' => 'Kim Ward',
            'email' => 'wardy484@gmail.com',
            'password' => Hash::make('password')
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
