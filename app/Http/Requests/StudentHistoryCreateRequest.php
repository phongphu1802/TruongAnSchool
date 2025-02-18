<?php

namespace App\Http\Requests;

use App\Enums\StudentEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentHistoryCreateRequest extends FormRequest
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
            'start_date' => 'required|date_format:d-m-Y|before_or_equal:end_date',
            'end_date' => 'required|date_format:d-m-Y|after_or_equal:start_date',
            'student_uuid' => ['required', Rule::exists('students', 'uuid')],
            'status' => ['required', Rule::in(StudentEnum::PAID->value, StudentEnum::UNPAID->value)]
        ];
    }
}