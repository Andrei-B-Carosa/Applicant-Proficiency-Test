<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;

class PageRequest extends FormRequest
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
            'page' => 'required',
        ];
    }

    protected function prepareForValidation()
    {
        // Replace 'name' with 'no name' if it is null
        $this->merge([
            'page' => $this->input('page') ?? Cache::get('applicant-page','dashboard'),
        ]);
    }
}
