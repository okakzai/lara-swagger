<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerUser = User::factory()->create([
            'email' => 'owner@gmail.com',
            'password' => bcrypt('owner@1$')
        ]);
        $ownerUser->assignRole('owner');
    }
}
