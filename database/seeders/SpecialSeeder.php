<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specials')->insert([
            'name' => 'The Strawberry Cheesecake Mocha Latte',
            'description' => 'Stop on by and treat yourself to this decadent delight! Get it hot or iced. As always, 20% OFF through Sunday!'            
        ]);
    }
}
