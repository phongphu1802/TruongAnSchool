<?php

namespace App\Http\Controllers;

use App\Abstracts\AbstractRestAPIController;
use App\Http\Controllers\Traits\DestroyTrait;
use App\Http\Controllers\Traits\EditTrait;
use App\Http\Controllers\Traits\IndexTrait;
use App\Http\Controllers\Traits\ShowTrait;
use App\Http\Controllers\Traits\StoreTrait;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\TeacherCreateRequest;
use App\Http\Requests\TeacherUpdateRequest;
use App\Http\Resources\TeacherResource;
use App\Http\Resources\TeacherResourceCollection;
use App\Services\TeacherService;

class TeacherController extends AbstractRestAPIController
{
    use IndexTrait, ShowTrait, StoreTrait, DestroyTrait, EditTrait;
    public function __construct(TeacherService $service)
    {
        $this->service = $service;
        $this->resourceClass = TeacherResource::class;
        $this->resourceCollectionClass = TeacherResourceCollection::class;
        $this->indexRequest = IndexRequest::class;
        $this->editRequest = TeacherUpdateRequest::class;
        $this->storeRequest = TeacherCreateRequest::class;
    }
}