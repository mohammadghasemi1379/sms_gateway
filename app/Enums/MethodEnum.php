<?php

namespace App\Enums;

enum MethodEnum: string
{
    public const GET = 'get';
    public const POST = 'post';
    public const PUT = 'put';
    public const PATCH = 'patch';
    public const Delete = 'delete';
}
