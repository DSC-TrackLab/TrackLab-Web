<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UsersRequest extends FormRequest
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

            'name' => 'required|string',
            'password' => 'required|required_with:password_confirmation|min:8|confirmed',
            'email' => 'required',

        ];
    }
    /**
     * Get the error messages for the defined validation rules
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'name' => 'Your name and surname are need.',
            'password' => 'Password is required!',
            'email' => 'Email address is needs to be entered and unique!',
        ];
    }
}
