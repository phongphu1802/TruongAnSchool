<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\StudentEnum;

class StudentHistoryUpdateRequest extends FormRequest
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
            'start_date' => 'date_format:d-m-Y|before_or_equal:end_date',
            'end_date' => 'date_format:d-m-Y|after_or_equal:start_date',
            'student_uuid' => [Rule::exists('students', 'uuid')],
            'status' => [Rule::in(StudentEnum::PAID->value, StudentEnum::UNPAID->value)]
        ];
    }
}