<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userUser = User::factory()->create([
            'email' => 'user@gmail.com',
            'password' => bcrypt('user@1$')
        ]);
        $userUser->assignRole('user');
    }
}
