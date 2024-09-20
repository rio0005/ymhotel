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
            'reservation_id' => '1',
            'roomid' => '1',
            'check_in' => '2024-9-14',
            'fee' => '30000',
        ]);

        \App\Models\Detail::create([
            'reservation_id' => '2',
            'roomid' => '2',
            'check_in' => '2024-9-15',
            'fee' => '500000',
        ]);
    }
}
