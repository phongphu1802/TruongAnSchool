<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Request;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'room_uuid' => $this->room_uuid,
            'teacher_uuid' => $this->teacher_uuid,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];

        $expand = Request::get('expand', []);

        if (in_array('course__room_uuid', $expand)) {
            $data['room'] = $this->room;
        }

        if (in_array('course__teacher_uuid', $expand)) {
            $data['teacher'] = $this->teacher;
        }

        return $data;
    }
}