<?php

namespace App\Repositories;

use App\Enums\LogStatusEnum;
use App\Models\SmsLog;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class SendSmsRepository
{
    /**
     * @param string $receiver_number
     * @param string $message
     * @param int $user_id
     * @return SmsLog
     * @throws \Throwable
     */
    public function makePendingLogWithDefaultGateway(string $receiver_number, string $message, int $user_id): SmsLog
    {
        $default_gateway = Config::get('sms_gateways.default_gateway');
        try {
            DB::beginTransaction();

            $sms_log = SmsLog::create([
                'sender_id' => $user_id,
                'message' => $message,
                'receiver_number' => $receiver_number,
                'sender_number' => Config::get("sms_gateways.$default_gateway.sender_phone_number", ''),
                'sender_getaway' => $default_gateway,
                'status' => LogStatusEnum::PENDING,
            ]);

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }

        return $sms_log;
    }

    public function updateLogWithStatus(SmsLog $smsLog, string $status, mixed $log_message): SmsLog
    {
        $smsLog->update([
            'status' => $status,
            'log_message' => $log_message
        ]);

        return $smsLog->refresh();
    }
}
