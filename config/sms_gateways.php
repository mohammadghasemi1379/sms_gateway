<?php

use \App\Enums\MethodEnum;

return [
    'default_gateway' => env('SMS_GATEWAY' , 'test'),

    'max_receiver_length' => env('MAX_RECEIVER_LENGTH', 15),
    'min_receiver_length' => env('MIN_RECEIVER_LENGTH', 5),
    'receiver_pattern' => '/^[0-9]{3}[-\s.]?[0-9]{4,7}$/',

    /* for add new SMS driver
     * todo
     **/

    'kavenegar' => [
        'method' => MethodEnum::GET,
        'secure' => true, /** https:// OR http:// */
        'api_url' => '', //gateway
        'message_label' => '',
        'receiver_label' => '',
        'sender_phone_number' => '',
        'options' => [
            ''
        ],
        'headers' => [
            "Accept" => "application/json",
            "Content-Type" => "application/x-www-form-urlencoded",
            "charset" => "utf-8"
        ],
    ],

    'raygan_sms' => [
        'method' => MethodEnum::GET,
        'api_url' => 'https://raygansms.com/SendMessageWithPost.ashx', //gateway
        'message_label' => 'MessageBody',
        'receiver_label' => 'RecNumber',
        'sender_phone_number' => '5000299559686',
        'options' => [
            'Username' => 'adilar',
            'Password' => '4976342',
            'PhoneNumber' => '5000299559686',
            'Smsclsss' => '1'
        ],
        'headers' => [
            "Accept" => "application/json",
        ],
    ],

    'test' => [
        'method' => MethodEnum::GET,
        /* if you not use docker change it to APP_URL  */
        'api_url' => env('APP_HOST') . '/api/test/getaway', //testing gateway
        'message_label' => 'label',
        'receiver_label' => 'receiver',
        'options' => [
            'Username' => 'testing',
            'Password' => 'test213',
        ],
        'headers' => [
            "Accept" => "application/json",
        ],
    ],
];
