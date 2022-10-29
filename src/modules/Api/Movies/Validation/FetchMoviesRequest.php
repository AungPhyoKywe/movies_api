<?php

namespace Movies\Api\Movies\Validation;

use Illuminate\Foundation\Http\FormRequest;

class FetchMoviesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'limit' => 'integer',
            'offset' => 'integer'
        ];
    }
}
