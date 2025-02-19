<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Enums\StudentEnum;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 2, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van C', 'class_uuid' => 3, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van D', 'class_uuid' => 4, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van E', 'class_uuid' => 5, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van F', 'class_uuid' => 6, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van K', 'class_uuid' => 7, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van G', 'class_uuid' => 8, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van M', 'class_uuid' => 9, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van N', 'class_uuid' => 10, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van H', 'class_uuid' => 11, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van N', 'class_uuid' => 12, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van O', 'class_uuid' => 13, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van P', 'class_uuid' => 14, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 15, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 2, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 3, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 4, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 5, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 6, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 7, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 8, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 9, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 10, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 11, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 12, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van B', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value],

        ];

        foreach ($students as $student) {
            Student::updateOrCreate(['name' => $student['name']], $student);
        }
    }
}