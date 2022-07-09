<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Config;

class PhoneNumberRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $explodePhoneNumber = explode('-', $value);

        if (count($explodePhoneNumber) > 2) {
            return false;
        }

        if (!in_array($explodePhoneNumber[0], DialCodeArray())) {
            return false;
        }

        if (mb_strlen($explodePhoneNumber[1]) > Config::get('sms_gateways.max_receiver_length')) {
            return false;
        }

        if (mb_strlen($explodePhoneNumber[1]) < Config::get('sms_gateways.min_receiver_length')) {
            return false;
        }

        if (!preg_match(Config::get('sms_gateways.receiver_pattern'), $explodePhoneNumber[1])) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.custom.phone_number_invalid');
    }
}
