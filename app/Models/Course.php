<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Course extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $primaryKey = 'uuid';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'teacher_uuid',
    ];

    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'uuid', 'teacher_uuid');
    }

    public function room($room_uuid)
    {
        return Room::findOrFail($room_uuid);
    }

    public function roomCourse()
    {
        return $this->hasMany(CourseRoom::class, 'course_uuid', 'uuid');
    }
}