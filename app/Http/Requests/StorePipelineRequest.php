<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePipelineRequest extends FormRequest
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
            'pipeline_type_id' => 'required|exists:pipeline_types,id',
            'company_id' => 'required',
            'name' => 'required',
            'size' => 'required',
            'start_lat' => 'required|between:-180,180',
            'start_long' => 'required|between:-90,90',
            'end_lat' => 'required|between:-180,180',
            'end_long' => 'required|between:-90,90'

        ];
    }
}
