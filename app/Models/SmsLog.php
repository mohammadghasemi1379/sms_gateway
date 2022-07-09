<?php

namespace App\Models;

use App\Casts\PhoneNumberCast;
use App\Enums\LogStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

class SmsLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id', 'message', 'receiver_number', 'sender_number', 'sender_getaway', 'log_message', 'status'
    ];

    protected $casts = [
        'receiver_number' => PhoneNumberCast::class,
    ];

    public $timestamps = false;

    /**
     * @return BelongsTo
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    /**
     * cope a query to only include candidates Where in user current company.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeWhereSender($query, int $user_id)
    {
        return $query->where('sender_id', $user_id);
    }
}
