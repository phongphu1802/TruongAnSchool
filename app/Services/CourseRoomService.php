<?php

namespace App\Services;

use App\Abstracts\AbstractService;
use App\Models\CourseRoom;

class CourseRoomService extends AbstractService
{
    protected $modelClass = CourseRoom::class;
}