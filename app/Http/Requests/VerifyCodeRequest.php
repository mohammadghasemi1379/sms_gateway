<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumberRule;
use App\Rules\VerifyCodeRule;
use Illuminate\Foundation\Http\FormRequest;

class VerifyCodeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'phone_number' => ['required', new PhoneNumberRule, 'exists:users,phone_number'],
            'verify_code' => ['required', new VerifyCodeRule($this->phone_number)]
        ];
    }
}
