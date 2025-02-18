<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Request;

class StudentHistoryResource extends JsonResource
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
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'student_uuid' => $this->student_uuid,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];

        $expand = Request::get('expand', []);

        if (in_array('student_history__student_uuid', $expand)) {
            $data['student'] = $this->student;
        }

        return $data;

    }
}