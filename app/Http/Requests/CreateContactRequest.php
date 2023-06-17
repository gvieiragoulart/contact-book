<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactRequest extends FormRequest
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
            'name' => [
                'required',
                'min:3',
                'max:100',
            ],
            'second_name' => [
                'nullable',
                'min:3',
                'max:100',
            ],
            'email' => [
                'required',
                'min:3',
                'max:100',
                'email',
                'unique:contacts,email'
            ],
            'number' => [
                'required',
                'min:10',
                'max:12',
                'unique:contacts,number',
            ],
        ];
    }
}