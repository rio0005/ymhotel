<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Reservation::create([
            'guest_id' => '1',
            'people' => '3',
            'check_in' => '2024-9-14',
            'check_out' => '2024-9-16',
        ]);

        \App\Models\Reservation::create([
            'guest_id' => '2',
            'people' => '2',
            'check_in' => '2024-9-20',
            'check_out' => '2024-9-17',
        ]);
    }
}
