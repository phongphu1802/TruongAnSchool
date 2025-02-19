<?php

namespace App\Http\Controllers;

use App\Abstracts\AbstractRestAPIController;
use App\Http\Controllers\Traits\DestroyTrait;
use App\Http\Controllers\Traits\EditTrait;
use App\Http\Controllers\Traits\IndexTrait;
use App\Http\Controllers\Traits\ShowTrait;
use App\Http\Controllers\Traits\StoreTrait;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\ClassCreateRequest;
use App\Http\Requests\ClassUpdateRequest;
use App\Http\Resources\ClassResource;
use App\Http\Resources\ClassResourceCollection;
use App\Services\ClassService;

class ClassController extends AbstractRestAPIController
{
    use IndexTrait, ShowTrait, StoreTrait, DestroyTrait, EditTrait;
    public function __construct(ClassService $service)
    {
        $this->service = $service;
        $this->resourceClass = ClassResource::class;
        $this->resourceCollectionClass = ClassResourceCollection::class;
        $this->indexRequest = IndexRequest::class;
        $this->editRequest = ClassUpdateRequest::class;
        $this->storeRequest = ClassCreateRequest::class;
    }
}