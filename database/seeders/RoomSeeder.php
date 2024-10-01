<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Room::create([
            'room_type_id' => '1',
            'room_number' => '206',
        ]);

        \App\Models\Room::create([
            'room_type_id' => '2',
            'room_number' => '503',
        ]);
    }
}
