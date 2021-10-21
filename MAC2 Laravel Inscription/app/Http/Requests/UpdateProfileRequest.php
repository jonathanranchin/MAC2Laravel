<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'first_name' => 'required',
            'email' => 'required|email',
            'password' => 'min:6|confirmed',
            'address' => 'string',
            'city' => 'string',
            'postalCode' => 'string',
            'comment' => 'string',
            'phone' => 'required|string|max:11|unique:users',
        ];
    }
}
