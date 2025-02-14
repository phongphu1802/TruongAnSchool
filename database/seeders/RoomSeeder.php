<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Rooms = [
            ['name' => 'Room A'],
            ['name' => 'Room B']
        ];

        foreach ($Rooms as $Room) {
            Room::updateOrCreate(['name' => $Room['name']], $Room);
        }
    }
}