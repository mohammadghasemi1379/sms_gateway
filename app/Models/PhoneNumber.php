<?php

namespace App\Models;

use Illuminate\Support\Facades\Config;

final class PhoneNumber
{
    public function __construct(
        public string $phone_number
    ){}

    public static function fromString(string $phone_number): self
    {
        self::validate($phone_number);

        return new self($phone_number);
    }

    public static function validate(string $phone_number)
    {
        $explodePhoneNumber = explode('-', $phone_number);

        if (count($explodePhoneNumber) > 2) {
            throw new \InvalidArgumentException('Invalid phone number format.');
        }

        self::countryCodeValidation($explodePhoneNumber[0]);

        self::PhoneNumberValidation($explodePhoneNumber[1]);
    }

    /**
     * @return void
     * @throws \InvalidArgumentException
     */
    private static function countryCodeValidation(string $country_code)
    {
        if (!in_array($country_code, DialCodeArray())) {
            throw new \InvalidArgumentException('Invalid phone number dial code.');
        }
    }

    /**
     * @return void
     * @throws \InvalidArgumentException
     */
    private static function PhoneNumberValidation(string $phone_number)
    {
        if (mb_strlen($phone_number) > Config::get('sms_gateways.max_receiver_length')) {
            throw new \InvalidArgumentException('Phone number is too long.');
        }

        if (mb_strlen($phone_number) < Config::get('sms_gateways.min_receiver_length')) {
            throw new \InvalidArgumentException('Phone number is too short.');
        }

        if (!preg_match(Config::get('sms_gateways.receiver_pattern'), $phone_number)) {
            throw new \InvalidArgumentException('Invalid phone number format.');
        }
    }

    /**
     * @return string
     */
    public function get(): string
    {
        return $this->phone_number;
    }
}
