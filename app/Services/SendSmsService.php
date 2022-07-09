<?php

namespace App\Services;

use App\Repositories\SendSmsRepository;
use App\Jobs\SendSmsJob;
use App\Models\SmsLog;

class SendSmsService
{
    public function __construct(
        private SendSmsRepository $sendSmsRepository
    )
    {
    }

    /**
     * @param string $receiver_number
     * @param string $message
     * @param int $user_id
     * @return SmsLog
     * @throws \Throwable
     */
    public function SendSmsWithDefaultGetaway(string $receiver_number, string $message, int $user_id): SmsLog
    {
        $sms_log = $this->sendSmsRepository->makePendingLogWithDefaultGateway($receiver_number, $message, $user_id);

        SendSmsJob::dispatch($sms_log);

        return $sms_log;
    }
}
