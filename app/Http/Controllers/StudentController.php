<?php

namespace App\Http\Controllers;

use App\Abstracts\AbstractRestAPIController;
use App\Http\Controllers\Traits\DestroyTrait;
use App\Http\Controllers\Traits\EditTrait;
use App\Http\Controllers\Traits\IndexTrait;
use App\Http\Controllers\Traits\ShowTrait;
use App\Http\Controllers\Traits\StoreTrait;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\StudentCreateRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Http\Resources\StudentResource;
use App\Http\Resources\StudentResourceCollection;
use App\Services\StudentService;

class StudentController extends AbstractRestAPIController
{
    use IndexTrait, ShowTrait, StoreTrait, DestroyTrait, EditTrait;
    public function __construct(StudentService $service)
    {
        $this->service = $service;
        $this->resourceClass = StudentResource::class;
        $this->resourceCollectionClass = StudentResourceCollection::class;
        $this->indexRequest = IndexRequest::class;
        $this->editRequest = StudentUpdateRequest::class;
        $this->storeRequest = StudentCreateRequest::class;
    }
}