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
use App\Services\CourseRoomService;
use App\Services\CourseService;

class CourseController extends AbstractRestAPIController
{
    protected $courseRoomService;

    use IndexTrait, ShowTrait, DestroyTrait, EditTrait;
    public function __construct(CourseService $service, CourseRoomService $courseRoomService)
    {
        $this->service = $service;
        $this->courseRoomService = $courseRoomService;
        $this->resourceClass = CourseResource::class;
        $this->resourceCollectionClass = CourseResourceCollection::class;
        $this->indexRequest = IndexRequest::class;
    }

    public function store(CourseCreateRequest $request)
    {

        $course = $this->service->create(['name' => $request->name, 'teacher_uuid' => $request->teacher_uuid]);

        foreach ($request->room as $item) {
            $this->courseRoomService->create([
                'course_uuid' => $course->getKey(),
                'room_uuid' => $item['room_uuid'],
                'start_time' => $item['start_time'],
                'end_time' => $item['end_time'],
            ]);
        }

        return $this->sendOkJsonResponse($this->service->resourceToData($this->resourceClass, $course));
    }

    public function edit(CourseUpdateRequest $request)
    {
        $model = $this->service->findOrFailById($request->id);

        $this->service->update($model, ['name' => $request->name, 'teacher_uuid' => $request->teacher_uuid]);

        if (count($request->room) > 0) {
            $courseRooms = $this->courseRoomService->findAllWhere(['course_uuid', $request->id]);

            // Delete course room old
            foreach ($courseRooms as $courseRoom) {
                $this->courseRoomService->destroy($courseRoom->id);
            }

            // Create course room new
            foreach ($request->room as $item) {
                $this->courseRoomService->create([
                    'course_uuid' => $request->id,
                    'room_uuid' => $item['room_uuid'],
                    'start_time' => $item['start_time'],
                    'end_time' => $item['end_time'],
                ]);
            }
        }

        return $this->sendOkJsonResponse($this->service->resourceToData($this->resourceClass, $model));
    }
}