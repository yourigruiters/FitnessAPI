<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
            'programs_id' => ['required', 'numeric'],
            'activity_type' => 'required',
            'activity_date' => ['required', 'date_format:Y-m-d'],
            'minutes' => ['required', 'numeric']
        ];
    }
}
