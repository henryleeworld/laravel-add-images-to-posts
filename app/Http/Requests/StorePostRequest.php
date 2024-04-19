<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'post_text' => ['required'],
            'images' => ['required', 'array'],
            'images.*' => ['required', 'image']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
