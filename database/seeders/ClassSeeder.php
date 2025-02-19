<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'Smart World 1', 'room_uuid' => 1, 'teacher' => 1],
            ['name' => 'Smart World 2', 'room_uuid' => 2, 'teacher' => 2],
            ['name' => 'Smart World 3', 'room_uuid' => 3, 'teacher' => 3],
            ['name' => 'Smart World 4', 'room_uuid' => 4, 'teacher' => 4],
            ['name' => 'Smart World 5', 'room_uuid' => 5, 'teacher' => 5],
            ['name' => 'Smart World 6', 'room_uuid' => 6, 'teacher' => 6],
            ['name' => 'Smart World 7', 'room_uuid' => 7, 'teacher' => 7],
            ['name' => 'Smart World 8', 'room_uuid' => 8, 'teacher' => 8],
            ['name' => 'Smart World 9', 'room_uuid' => 9, 'teacher' => 9],
            ['name' => 'Smart World 10', 'room_uuid' => 10, 'teacher' => 10],
            ['name' => 'Smart World 11', 'room_uuid' => 11, 'teacher' => 11],
            ['name' => 'Smart World 12', 'room_uuid' => 12, 'teacher' => 12],
            ['name' => 'Toeic 1', 'room_uuid' => 13, 'teacher' => 13],
            ['name' => 'Toeic 2', 'room_uuid' => 14, 'teacher' => 14],
            ['name' => 'Toeic 3', 'room_uuid' => 15, 'teacher' => 15],
            ['name' => 'Ielts 1', 'room_uuid' => 16, 'teacher' => 1],
            ['name' => 'Ielts 2', 'room_uuid' => 16, 'teacher' => 2],
            ['name' => 'Ielts 3', 'room_uuid' => 16, 'teacher' => 1],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(['name' => $role['name']], $role);
        }
    }
}