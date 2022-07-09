<?php

namespace App\Enums;

use phpDocumentor\Reflection\Types\Self_;

enum LogStatusEnum: string
{
    public const SENT = 'SENT';
    public const FAIL = 'FAIL';
    public const PENDING = 'PENDING';
}
