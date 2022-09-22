<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePipelineRequest extends FormRequest
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
            'company_id' => 'required|exists:companies,id',
            'name' => 'required',
            'size' => 'required|numeric',
            'start_lat' => 'required|between:-90.0,90.0',
            'start_long' => 'required|between:-180.0,180.0',
            'end_lat' => 'required|between:-90.0,90.0',
            'end_long' => 'required|between:-180.0,180.0'
        ];
    }
}
