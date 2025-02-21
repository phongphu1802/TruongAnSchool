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
            'teacher_uuid' => $this->teacher_uuid,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];

        $expand = Request::get('expand', []);

        if (in_array('course__room', $expand)) {
            $data['room'] = $this->roomCourse;
        }

        if (in_array('course__room', $expand) && in_array('course__room_room_uuid', $expand)) {
            foreach ($this->roomCourse as $key => $value) {
                $data['room'][$key]['room'] = $this->room($value->room_uuid);
            }
        }

        if (in_array('course__teacher_uuid', $expand)) {
            $data['teacher'] = $this->teacher;
        }

        return $data;
    }
}