<?php

namespace Movies\Api\Comments\Validation;

use Illuminate\Foundation\Http\FormRequest;

class FetchCommentRequest extends FormRequest
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
