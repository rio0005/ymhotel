<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Guest::create([
            'name' => '大阪たろう',
            'address' => '大阪府大阪市',
            'tel' => '12-3456-7890'
        ]);


        \App\Models\Guest::create([
            'name' => '京都はなこ',
            'address' => '京都府京都市',
            'tel' => '12-3456-7890'
        ]);
       
    }
}
