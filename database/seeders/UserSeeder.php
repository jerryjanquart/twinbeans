<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Grant Stevens',
            'email' => 'twinbeansllc@gmail.com',
            'password' => '$2y$12$MP89pj/7aR0tAL0RfJvQT.vEcarnIIg42hMvk1Y0Q.ZUqfv8hj2Cm', // FireKnights25
        ]);
    }
}
