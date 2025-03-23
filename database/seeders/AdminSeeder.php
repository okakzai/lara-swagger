<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::factory()->create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@1$')
        ]);
        $adminUser->assignRole('admin');
    }
}
