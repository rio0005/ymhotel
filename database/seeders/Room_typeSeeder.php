<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Room_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Room_type::create([
            'room_name' => 'スーペリアルーム',
            'people' => '3',
        ]);

        \App\Models\Room_type::create([
            'room_name' => 'スイートルーム',
            'people' => '2',
        ]);
    }
}
