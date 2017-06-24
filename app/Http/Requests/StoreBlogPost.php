<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'body'  => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required 1111',
            'body.required'  => 'A message is required 2222',
        ];
    }
}
