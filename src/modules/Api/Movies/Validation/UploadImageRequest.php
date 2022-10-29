<?php

namespace Movies\Api\Movies\Validation;

use Illuminate\Foundation\Http\FormRequest;

class UploadImageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image_path' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
