<?php

namespace App\Services;

use App\Enums\LogStatusEnum;
use App\Repositories\LogSmsRepository;

class LogSmsService
{
    public function __construct(
        private LogSmsRepository $log_sms_repository
    )
    {
    }

    /**
     * @return array
     */
    public function authLogSmsReport(): array
    {
        return [
            'total_count' => $this->log_sms_repository->totalCount(auth()->id()),
            'total_sent_count' => $this->log_sms_repository->totalStatusCount(LogStatusEnum::SENT, auth()->id()),
            'total_failed_count' => $this->log_sms_repository->totalStatusCount(LogStatusEnum::FAIL, auth()->id()),
            'total_pending_count' => $this->log_sms_repository->totalStatusCount(LogStatusEnum::PENDING, auth()->id()),
        ];
    }

    public function authLogHistory()
    {
        return $this->log_sms_repository->paginateUserLogLatest(auth()->id());
    }
}
