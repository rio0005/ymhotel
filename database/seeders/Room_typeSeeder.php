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
            'room_name' => 'スタンダード',
            'people' => '4',
        ]);

        \App\Models\Room_type::create([
            'room_name' => 'スイート',
            'people' => '6',
        ]);
    }
}
