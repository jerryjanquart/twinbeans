<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HotDrinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hot_drinks')->insert([
            'type' => 'Coffee',
            'small' => '$2.25',
            'medium' => '$2.75',
            'large' => '$3.15',
        ]);

        DB::table('hot_drinks')->insert([
            'type' => 'Latte',
            'small' => '$3.95',
            'medium' => '$4.85',
            'large' => '$5.65',
        ]);

        DB::table('hot_drinks')->insert([
            'type' => 'Americano',
            'small' => '$3.35',
            'medium' => '$4.25',
            'large' => '$5.00',
        ]);

        DB::table('hot_drinks')->insert([
            'type' => 'Hot Chocolate',
            'small' => '-',
            'medium' => '$2.25',
            'large' => '-',
        ]);

        DB::table('hot_drinks')->insert([
            'type' => 'Tea',
            'small' => '$2.00',
            'medium' => '-',
            'large' => '-',
        ]);

    }
}
