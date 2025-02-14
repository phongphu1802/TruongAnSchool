<?php

namespace App\Http\Controllers;

use App\Abstracts\AbstractRestAPIController;
use App\Http\Controllers\Traits\DestroyTrait;
use App\Http\Controllers\Traits\EditTrait;
use App\Http\Controllers\Traits\IndexTrait;
use App\Http\Controllers\Traits\ShowTrait;
use App\Http\Controllers\Traits\StoreTrait;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\RoomCreateRequest;
use App\Http\Requests\RoomUpdateRequest;
use App\Http\Resources\RoomResource;
use App\Http\Resources\RoomResourceCollection;
use App\Services\RoomService;

class RoomController extends AbstractRestAPIController
{
    use IndexTrait, ShowTrait, StoreTrait, DestroyTrait, EditTrait;
    public function __construct(RoomService $service)
    {
        $this->service = $service;
        $this->resourceClass = RoomResource::class;
        $this->resourceCollectionClass = RoomResourceCollection::class;
        $this->indexRequest = IndexRequest::class;
        $this->editRequest = RoomUpdateRequest::class;
        $this->storeRequest = RoomCreateRequest::class;
    }
}