<?php

namespace App\Services;

use App\Abstracts\AbstractService;
use App\Models\QueryBuilders\TeacherQueryBuilder;
use App\Models\Teacher;

class TeacherService extends AbstractService
{
    protected $modelClass = Teacher::class;

    protected $modelQueryBuilderClass = TeacherQueryBuilder::class;

}