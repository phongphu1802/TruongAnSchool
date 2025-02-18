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
            ['name' => 'Nguyen Van A', 'class_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value]
        ];

        foreach ($students as $student) {
            Student::updateOrCreate(['name' => $student['name']], $student);
        }
    }
}