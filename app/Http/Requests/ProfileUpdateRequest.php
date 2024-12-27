<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'full_name' => ['required'],
            'email' => [
                'required',
                'email',
            ],
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => "This field is required",
            'email.required' => "Email is required",
            'email.email' => "Please enter a valid email address",
        ];
    }
}
