<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Request;

class StudentResource extends JsonResource
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
            'course_uuid' => $this->course_uuid,
            'sex' => $this->sex,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];

        $expand = Request::get('expand', []);

        if (in_array('student__student_history', $expand)) {
            $data['student_history'] = $this->student_histories;
        }

        if (in_array('student__course_uuid', $expand)) {
            $data['course'] = $this->course;
        }

        if (in_array('student__course_uuid', $expand) && in_array('student__course_room_uuid', $expand)) {
            $data['course']['room'] = $this->room;
        }

        if (in_array('student__course_uuid', $expand) && in_array('student__course_teacher_uuid', $expand)) {
            $data['course']['teacher'] = $this->teacher;
        }

        return $data;

    }
}