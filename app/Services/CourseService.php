<?php

namespace App\Services;

use App\Abstracts\AbstractService;
use App\Models\QueryBuilders\CourseQueryBuilder;
use App\Models\Course;

class CourseService extends AbstractService
{
    protected $modelClass = Course::class;

    protected $modelQueryBuilderClass = CourseQueryBuilder::class;

}