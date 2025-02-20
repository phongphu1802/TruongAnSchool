<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseUpdateRequest extends FormRequest
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
            'name' => [Rule::unique('courses')->ignore($this->id, 'uuid')],
            'room_uuid' => [Rule::exists('rooms', 'uuid')],
            'teacher_uuid' => [Rule::exists('teachers', 'uuid')],
        ];
    }
}