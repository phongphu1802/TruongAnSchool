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
        'room_uuid',
        'teacher_uuid',
        'start_time',
        'end_time'
    ];

    public function room()
    {
        return $this->hasOne(Room::class, 'uuid', 'room_uuid');
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'uuid', 'teacher_uuid');
    }
}