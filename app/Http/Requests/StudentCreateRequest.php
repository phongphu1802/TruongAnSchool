<?php

namespace App\Http\Requests;

use App\Enums\StudentEnum;
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
            'class_uuid' => ['required', Rule::exists('class', 'uuid')],
            'status' => ['required', Rule::in(StudentEnum::STOP->value, StudentEnum::CONTINUE ->value)]
        ];
    }
}