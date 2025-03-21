<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreForHireRequest extends FormRequest
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
            'forHire_date' => 'required | date',
            'return_date' => 'required | date',
            'status' => 'required',
            'book_id' => 'required',
            'librarian_id' => 'required',
            'reader_id' => 'required',
        ];
    }
}
