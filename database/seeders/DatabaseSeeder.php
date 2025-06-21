<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1111'),
            'fullname' => 'Admin',
            'avatar' => null,
            'bio' => null,
            'gender' => null,
            'birthday' => null,
            'phone' => null,
            'address' => null,
            'role' => 'admin',
        ]);
    }
}
