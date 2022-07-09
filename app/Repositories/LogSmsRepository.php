<?php

namespace App\Repositories;

use App\Models\SmsLog;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class LogSmsRepository
{
    /**
     * @param int|null $user_id
     * @return int
     */
    public function totalCount(?int $user_id = null): int
    {
        return SmsLog::query()
            ->when(!is_null($user_id), fn($q) => $q->where('sender_id', $user_id))
            ->count();
    }

    /**
     * @param int|null $user_id
     * @param string $status
     * @return int
     */
    public function totalStatusCount(string $status, ?int $user_id = null): int
    {
        return SmsLog::query()
            ->when(!is_null($user_id), fn($q) => $q->where('sender_id', $user_id))
            ->where('status', $status)
            ->count();
    }

    /**
     * @param int $user_id
     * @return LengthAwarePaginator
     */
    public function paginateUserLogLatest(int $user_id)
    {
        return SmsLog::query()
            ->select(['id', 'message', 'receiver_number', 'sender_number', 'sender_getaway', 'log_message', 'status'])
            ->where('sender_id', $user_id)
            ->latest('created_at')
            ->paginate();
    }
}
