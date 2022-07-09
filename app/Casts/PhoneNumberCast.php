<?php

namespace App\Casts;

use App\Models\PhoneNumber;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class PhoneNumberCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return string
     */
    public function get($model, string $key, $value, array $attributes): string
    {
        return (PhoneNumber::fromString($value))->get();
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return string
     */
    public function set($model, string $key, $value, array $attributes): string
    {
        if (is_string($value)) {
            $value = PhoneNumber::fromString($value);
        }

        if (!$value instanceof PhoneNumber) {
            throw new \InvalidArgumentException('The given value is not a PhoneNumber instance.');
        }

        return $value->get();
    }
}
