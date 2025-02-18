<?php

namespace App\Services;

use App\Abstracts\AbstractService;
use App\Models\QueryBuilders\StudentQueryBuilder;
use App\Models\Student;

class StudentService extends AbstractService
{
    protected $modelClass = Student::class;

    protected $modelQueryBuilderClass = StudentQueryBuilder::class;

}