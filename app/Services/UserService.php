<?php

namespace App\Services;

use App\Abstracts\AbstractService;
use App\Enums\DashboardEnum;
use App\Http\Requests\DasboardStatisticRequest;
use App\Models\QueryBuilders\UserQueryBuilder;
use App\Models\User;

class UserService extends AbstractService
{
    protected $modelClass = User::class;
    protected $modelQueryBuilderClass = UserQueryBuilder::class;

}