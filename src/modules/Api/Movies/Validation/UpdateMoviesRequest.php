<?php

namespace Movies\Api\Movies\Validation;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMoviesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:30|min:0',
            'summary' => 'max:256|min:0',
        ];
    }
}
