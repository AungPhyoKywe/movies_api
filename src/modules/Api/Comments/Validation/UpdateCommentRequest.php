<?php

namespace Movies\Api\Comments\Validation;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'movie_id' => 'required|integer',
            'email' => 'required|email',
            'comment' => 'required|string'
        ];
    }
}
