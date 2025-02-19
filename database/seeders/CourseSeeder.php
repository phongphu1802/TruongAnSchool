<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            ['name' => 'Smart World 1', 'room_uuid' => 1, 'teacher_uuid' => 1, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Smart World 2', 'room_uuid' => 2, 'teacher_uuid' => 2, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Smart World 3', 'room_uuid' => 3, 'teacher_uuid' => 3, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Smart World 4', 'room_uuid' => 4, 'teacher_uuid' => 4, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Smart World 5', 'room_uuid' => 5, 'teacher_uuid' => 5, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Smart World 6', 'room_uuid' => 6, 'teacher_uuid' => 6, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Smart World 7', 'room_uuid' => 7, 'teacher_uuid' => 7, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Smart World 8', 'room_uuid' => 8, 'teacher_uuid' => 8, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Smart World 9', 'room_uuid' => 9, 'teacher_uuid' => 9, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Smart World 10', 'room_uuid' => 10, 'teacher_uuid' => 10, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Smart World 11', 'room_uuid' => 11, 'teacher_uuid' => 11, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Smart World 12', 'room_uuid' => 12, 'teacher_uuid' => 12, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Toeic 1', 'room_uuid' => 13, 'teacher_uuid' => 13, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Toeic 2', 'room_uuid' => 14, 'teacher_uuid' => 14, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Toeic 3', 'room_uuid' => 15, 'teacher_uuid' => 15, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Ielts 1', 'room_uuid' => 16, 'teacher_uuid' => 1, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Ielts 2', 'room_uuid' => 16, 'teacher_uuid' => 2, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
            ['name' => 'Ielts 3', 'room_uuid' => 16, 'teacher_uuid' => 1, 'start_time' => '17:45:00', 'end_time' => '19:45:00'],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(['name' => $course['name'], 'room_uuid' => $course['room_uuid'], 'teacher_uuid' => $course['teacher_uuid']], $course);
        }
    }
}