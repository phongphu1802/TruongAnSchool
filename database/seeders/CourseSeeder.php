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
            ['name' => 'Smart World 1', 'teacher_uuid' => 1,],
            ['name' => 'Smart World 2', 'teacher_uuid' => 2,],
            ['name' => 'Smart World 3', 'teacher_uuid' => 3,],
            ['name' => 'Smart World 4', 'teacher_uuid' => 4,],
            ['name' => 'Smart World 5', 'teacher_uuid' => 5,],
            ['name' => 'Smart World 6', 'teacher_uuid' => 6,],
            ['name' => 'Smart World 7', 'teacher_uuid' => 7,],
            ['name' => 'Smart World 8', 'teacher_uuid' => 8,],
            ['name' => 'Smart World 9', 'teacher_uuid' => 9,],
            ['name' => 'Smart World 10', 'teacher_uuid' => 10,],
            ['name' => 'Smart World 11', 'teacher_uuid' => 11,],
            ['name' => 'Smart World 12', 'teacher_uuid' => 12,],
            ['name' => 'Toeic 1', 'teacher_uuid' => 13,],
            ['name' => 'Toeic 2', 'teacher_uuid' => 14,],
            ['name' => 'Toeic 3', 'teacher_uuid' => 15,],
            ['name' => 'Ielts 1', 'teacher_uuid' => 1,],
            ['name' => 'Ielts 2', 'teacher_uuid' => 2,],
            ['name' => 'Ielts 3', 'teacher_uuid' => 1,],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(['name' => $course['name'], 'teacher_uuid' => $course['teacher_uuid']], $course);
        }
    }
}