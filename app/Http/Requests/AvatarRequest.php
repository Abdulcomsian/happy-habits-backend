<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvatarRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "is_male" => "required|in:true,false",
            "color_id" => "sometimes",
            "hair_id" => "sometimes",
            "shirt_id" => "sometimes",
            "glasses_id" => "sometimes",
            "eye_id" => "sometimes",
            "eyebrow_id" => "sometimes",
            "nose_id" => "sometimes",
            "lip_id" => "sometimes",
            "beard_id" => "sometimes",
        ];
    }
}
