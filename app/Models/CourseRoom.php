<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class CourseRoom extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'uuid';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'course_uuid',
        'room_uuid',
        'start_time',
        'end_time',
    ];

    public function room()
    {
        return $this->hasOne(Room::class, 'uuid', 'room_uuid');
    }
}