<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeanBagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bean_bags')->insert([
            'blend' => 'Julie\'s Blend',
            'cost' => '$16.50'
        ]);
        DB::table('bean_bags')->insert([
            'blend' => 'Lava Heart Blend',
            'cost' => '$16.50'
        ]);
        DB::table('bean_bags')->insert([
            'blend' => 'Catuai Blend',
            'cost' => '$14.50'
        ]);
        DB::table('bean_bags')->insert([
            'blend' => 'Espresso',
            'cost' => '$16.50'
        ]);
    }
}
