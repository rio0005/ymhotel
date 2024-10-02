<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Detail::create([

            'check_in' => '2024-9-14',
            'fee' => '30000',
        ]);

        \App\Models\Detail::create([

            'check_in' => '2024-9-15',
            'fee' => '500000',
        ]);
    }
}
