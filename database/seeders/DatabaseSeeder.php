<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Detail::create([
            'reservation_id' => '1',
            'room_id' => '1',
            'days' => '2024-9-14',
            'fee' => '30000',
        ]);

        \App\Models\Detail::create([
            'reservation_id' => '2',
            'room_id' => '2',
            'days' => '2024-9-15',
            'fee' => '500000',
        ]);
    }
}
