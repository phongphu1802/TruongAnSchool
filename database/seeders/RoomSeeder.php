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
            ['name' => 'Room B'],
            ['name' => 'Room C'],
            ['name' => 'Room D'],
            ['name' => 'Room E'],
            ['name' => 'Room F'],
            ['name' => 'Room G'],
            ['name' => 'Room H'],
            ['name' => 'Room I'],
            ['name' => 'Room K'],
            ['name' => 'Room L'],
            ['name' => 'Room M'],
            ['name' => 'Room N'],
            ['name' => 'Room O'],
            ['name' => 'Room P'],
            ['name' => 'Room Q']
        ];

        foreach ($Rooms as $Room) {
            Room::updateOrCreate(['name' => $Room['name']], $Room);
        }
    }
}