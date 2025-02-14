<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Teachers = [
            ['name' => 'Nguyễn Văn An', 'proper' => 'Mr.An', 'birthday' => '18-02-2000'],
            ['name' => 'Nguyễn Văn Bánh', 'proper' => 'Mr.Banh', 'birthday' => '25-10-2000'],
        ];

        foreach ($Teachers as $Teacher) {
            Teacher::updateOrCreate(['name' => $Teacher['name']], $Teacher);
        }
    }
}