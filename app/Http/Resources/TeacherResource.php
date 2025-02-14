<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'birthday' => $this->birthday,
            'proper' => $this->proper,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}