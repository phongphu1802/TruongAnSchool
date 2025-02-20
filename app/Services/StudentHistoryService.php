<?php

namespace App\Services;

use App\Abstracts\AbstractService;
use App\Models\QueryBuilders\StudentQueryBuilder;
use App\Models\StudentHistory;

class StudentHistoryService extends AbstractService
{
    protected $modelClass = StudentHistory::class;

    // protected $modelQueryBuilderClass = StudentQueryBuilder::class;

}