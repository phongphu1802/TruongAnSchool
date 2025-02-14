<?php

namespace App\Services;

use App\Abstracts\AbstractService;
use App\Models\QueryBuilders\RoomQueryBuilder;
use App\Models\Room;

class RoomService extends AbstractService
{
    protected $modelClass = Room::class;

    protected $modelQueryBuilderClass = RoomQueryBuilder::class;

}