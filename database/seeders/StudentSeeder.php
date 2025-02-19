<?php

namespace Database\Seeders;

use App\Enums\SexEnum;
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
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 2, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 3, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 4, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 5, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 6, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 7, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 8, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 9, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 10, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 11, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 12, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 13, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 14, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 15, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 2, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 3, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 4, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 5, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 6, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 7, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 8, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 9, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 10, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 11, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 12, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],
            ['name' => $this->randomName(), 'course_uuid' => 1, 'status' => StudentEnum::CONTINUE ->value, 'sex' => $this->randomSex()],

        ];

        foreach ($students as $student) {
            Student::updateOrCreate(['name' => $student['name']], $student);
        }
    }

    public function randomName()
    {
        $name = ['Huy', 'Phú', 'Phong', 'Nam', 'An', 'Minh', 'Nhân', 'Phước', 'Mai', 'My', 'Hồng', 'Hân', 'Quý', 'Thọ', 'Tuấn', 'Đăng', 'Trinh', 'Nhi', 'Thảo'];

        $Surname = ['Nguyễn', 'Trần', 'Lê', 'Phạm', 'Hoàng', 'Vũ', 'Phan', 'Trương', 'Bùi', 'Đặng', 'Đỗ', 'Ngô', 'Hồ', 'Dương', 'Đinh', 'Trịnh'];

        return $Surname[array_rand($Surname)] . ' ' . $name[array_rand($name)];
    }

    public function randomSex()
    {
        $sex = [SexEnum::WOMEN->value, SexEnum::OTHER->value, SexEnum::MEN->value];

        return $sex[array_rand($sex)];
    }
}