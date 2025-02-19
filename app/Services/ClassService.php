<?php

namespace App\Services;

use App\Abstracts\AbstractService;
use App\Models\QueryBuilders\ClassQueryBuilder;
use App\Models\ClassModel;

class ClassService extends AbstractService
{
    protected $modelClass = ClassModel::class;

    protected $modelQueryBuilderClass = ClassQueryBuilder::class;

}