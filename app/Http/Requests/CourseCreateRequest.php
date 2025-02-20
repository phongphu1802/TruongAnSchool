<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CourseCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('courses', 'name')],
            'room_uuid' => ['required', Rule::exists('rooms', 'uuid')],
            'teacher_uuid' => ['required', Rule::exists('teachers', 'uuid')],
            'start_time' => ['required'],
            'end_time' => ['required'],
        ];
    }
}