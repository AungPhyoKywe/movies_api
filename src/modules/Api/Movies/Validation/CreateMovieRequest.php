<?php

namespace Movies\Api\Movies\Validation;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
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
            'generes' => 'nullable|string',
            'author' => 'nullable|string',
            "pdf_file" => "nullable|mimes:pdf|max:10000",
            "tags" => "nullable|string",
            "imdb_rate" => "nullable|integer"
        ];
    }
}
