<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateStoreRequest extends FormRequest
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
            'name'          => 'required|string|min:3|max:30',
			'description'   => 'required|string|min:10|max:255',
        ];
    }

    /**
     * Provides array of error messages that will be used by validator
     * 
     * @return array    array of customized messages
     */
    public function messages() : array
    {
        return [
            'name.required'          => 'The "Store Name" field is required.',
            'name.min'               => 'The "Store Name" field must be at least 3 characters.',
            'name.max'               => 'The "Store Name" field must not exceed 30 characters.',  
            'description.required'   => 'The "Description" field is required.',
            'description.min'        => 'The "Description" field must be at least 10 characters.',
            'description.max'        => 'The "Description" field must not exceed 255 characters.',
        ];
    }

    /**
     * Handling of when a request encounters error in validation
     * @param Validator $oValidator
     * 
     * @return void
     */
    protected function failedValidation(Validator $oValidator)
    {
        // for from form sending
        throw new HttpResponseException(back()->withErrors($oValidator)->withInput());
    }
}
