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
        $merchantUser1 = User::factory()->create([
            'email' => 'merchant1@gmail.com',
            'password' => bcrypt('merchant1$'),
            'saldo' => 550000
        ]);
        $merchantUser1->assignRole('merchant');

        $merchantUser2 = User::factory()->create([
            'email' => 'merchant2@gmail.com',
            'password' => bcrypt('merchant2$'),
            'saldo' => 250700
        ]);
        $merchantUser2->assignRole('merchant');
    }
}
