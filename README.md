# **SMS Gateway** Project
Sending the SMS message with:
* RabbitMQ
* MariaDB
* PHP 8.1
* Nginx

![](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)
framework version: 9.19

### Some Features:
* log anything in DB
* all SMS provider service supportable
* dockerized all requirements and project

## default provider support
1. [kavenegar](https://kavenegar.com/)
2. [raygansms](https://raygansms.com/)

## add custom SMS provider
for add any provider you want, you just add it in config file.
steps:
1. go to `config/sms_gateways.php`
2. add your configuration like below
```php
    'raygan_sms' => [
        'method' => MethodEnum::GET,
        'api_url' => 'https://raygansms.com/SendMessageWithPost.ashx', //gateway
        'message_label' => 'MessageBody',
        'receiver_label' => 'RecNumber',
        'sender_phone_number' => 'xxxx',
        'options' => [
            'Username' => 'xxxx',
            'Password' => 'xxxxx',
            'PhoneNumber' => 'xxxxx',
            'Smsclsss' => '1'
        ],
        'headers' => [
            "Accept" => "application/json",
        ],
    ],
```
3. now you can go to .env and change the `SMS_GATEWAY` to anything you choose.  
   just this. :)

## APIs Doc
you can see APIs doc last changes here:
* [APIs Doc](https://documenter.getpostman.com/view/9203813/UzJPMap8)

## installation:
1. got to project directory
2. At first, you need to copy `.env.example` file to `.env`.
3. Then run
    ```shell 
     docker-compose up -d
    ```
