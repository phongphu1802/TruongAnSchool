<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\StudentEnum;
use App\Enums\SexEnum;

class StudentUpdateRequest extends FormRequest
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
            'course_uuid' => [Rule::exists('courses', 'uuid')],
            'status' => [Rule::in(StudentEnum::STOP->value, StudentEnum::CONTINUE ->value)],
            'sex' => [Rule::in(SexEnum::WOMEN->value, SexEnum::MEN->value, SexEnum::OTHER->value)]
        ];
    }
}