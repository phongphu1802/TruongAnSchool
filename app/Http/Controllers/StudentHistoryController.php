<?php

namespace App\Http\Controllers;

use App\Abstracts\AbstractRestAPIController;
use App\Http\Controllers\Traits\DestroyTrait;
use App\Http\Controllers\Traits\EditTrait;
use App\Http\Controllers\Traits\IndexTrait;
use App\Http\Controllers\Traits\ShowTrait;
use App\Http\Controllers\Traits\StoreTrait;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\StudentHistoryCreateRequest;
use App\Http\Requests\StudentHistoryUpdateRequest;
use App\Http\Resources\StudentHistoryResource;
use App\Http\Resources\StudentHistoryResourceCollection;
use App\Services\StudentHistoryService;

class StudentHistoryController extends AbstractRestAPIController
{
    use IndexTrait, ShowTrait, StoreTrait, DestroyTrait, EditTrait;
    public function __construct(StudentHistoryService $service)
    {
        $this->service = $service;
        $this->resourceClass = StudentHistoryResource::class;
        $this->resourceCollectionClass = StudentHistoryResourceCollection::class;
        $this->indexRequest = IndexRequest::class;
        $this->editRequest = StudentHistoryUpdateRequest::class;
        $this->storeRequest = StudentHistoryCreateRequest::class;
    }
}