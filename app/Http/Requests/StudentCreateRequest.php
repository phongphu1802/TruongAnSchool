<?php

namespace App\Http\Requests;

use App\Enums\StudentEnum;
use App\Enums\SexEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentCreateRequest extends FormRequest
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
            'name' => ['required'],
            'course_uuid' => ['required', Rule::exists('courses', 'uuid')],
            'status' => ['required', Rule::in(StudentEnum::STOP->value, StudentEnum::CONTINUE ->value)],
            'sex' => ['required', Rule::in(SexEnum::WOMEN->value, SexEnum::MEN->value, SexEnum::OTHER->value)]
        ];
    }
}