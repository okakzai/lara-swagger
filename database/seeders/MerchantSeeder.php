<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $merchantUser = User::factory()->create([
            'email' => 'merchant@gmail.com',
            'password' => bcrypt('merchant@1$')
        ]);
        $merchantUser->assignRole('merchant');
    }
}
