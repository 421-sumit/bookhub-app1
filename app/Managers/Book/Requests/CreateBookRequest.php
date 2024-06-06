<?php

namespace App\Managers\Book\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
            'title' => 'required|max:255',
            'genre_id' => 'required',
            'author_id' => 'required',
            'publisher_id' => 'required',
            'language_id' => 'required',
            'rack_id' => 'required', 
            'cost' => 'required',
            'quantity' => 'required',
        ];
    }
}
