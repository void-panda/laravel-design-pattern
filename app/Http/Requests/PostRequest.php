<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Post Title must be filled',
            'title.string' => 'Post Title must be a string',
            'title.max' => 'Post Title must be less than 255 characters',
            'content.required' => 'Post Content must be filled',
            'content.string' => 'Post Content must be a string',
        ];
    }
}
