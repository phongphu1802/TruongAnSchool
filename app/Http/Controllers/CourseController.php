<?php

namespace App\Http\Controllers;

use App\Abstracts\AbstractRestAPIController;
use App\Http\Controllers\Traits\DestroyTrait;
use App\Http\Controllers\Traits\EditTrait;
use App\Http\Controllers\Traits\IndexTrait;
use App\Http\Controllers\Traits\ShowTrait;
use App\Http\Controllers\Traits\StoreTrait;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\CourseCreateRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Http\Resources\CourseResource;
use App\Http\Resources\CourseResourceCollection;
use App\Services\CourseService;

class CourseController extends AbstractRestAPIController
{
    use IndexTrait, ShowTrait, StoreTrait, DestroyTrait, EditTrait;
    public function __construct(CourseService $service)
    {
        $this->service = $service;
        $this->resourceClass = CourseResource::class;
        $this->resourceCollectionClass = CourseResourceCollection::class;
        $this->indexRequest = IndexRequest::class;
        $this->editRequest = CourseUpdateRequest::class;
        $this->storeRequest = CourseCreateRequest::class;
    }
}