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
            ['name' => 'Nguyễn Văn A', 'proper' => 'Mr.An', 'birthday' => '18-02-2000'],
            ['name' => 'Nguyễn Văn B', 'proper' => 'Mr.Kevin', 'birthday' => '25-10-1999'],
            ['name' => 'Nguyễn Văn C', 'proper' => 'Mr.Leo', 'birthday' => '25-09-2001'],
            ['name' => 'Nguyễn Văn D', 'proper' => 'Mr.Neymar', 'birthday' => '02-10-2000'],
            ['name' => 'Nguyễn Văn E', 'proper' => 'Mr.Davis', 'birthday' => '25-06-1990'],
            ['name' => 'Nguyễn Văn F', 'proper' => 'Mr.Hai', 'birthday' => '11-07-1989'],
            ['name' => 'Nguyễn Văn G', 'proper' => 'Mr.Ba', 'birthday' => '25-10-1979'],
            ['name' => 'Nguyễn Văn H', 'proper' => 'Mr.Luis', 'birthday' => '29-10-1998'],
            ['name' => 'Nguyễn Văn I', 'proper' => 'Mr.Adama', 'birthday' => '18-09-1997'],
            ['name' => 'Nguyễn Văn K', 'proper' => 'Mr.Naldo', 'birthday' => '16-02-1998'],
            ['name' => 'Nguyễn Văn L', 'proper' => 'Mr.Bale', 'birthday' => '07-07-1999'],
            ['name' => 'Nguyễn Văn N', 'proper' => 'Mr.Silva', 'birthday' => '04-08-1989'],
            ['name' => 'Nguyễn Văn O', 'proper' => 'Mr.Victo', 'birthday' => '01-03-1979'],
            ['name' => 'Nguyễn Văn P', 'proper' => 'Mr.Venus', 'birthday' => '28-08-1995'],
            ['name' => 'Nguyễn Văn Q', 'proper' => 'Mr.Exciter', 'birthday' => '21-12-1997'],
        ];

        foreach ($Teachers as $Teacher) {
            Teacher::updateOrCreate(['name' => $Teacher['name']], $Teacher);
        }
    }
}