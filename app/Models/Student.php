<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
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
        'status',
        'sex'
    ];

    public function student_historys()
    {
        return $this->hasMany(StudentHistory::class, 'student_uuid', 'uuid');
    }

    public function course()
    {
        return $this->hasOne(Course::class, 'uuid', 'course_uuid');
    }
}