<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class SmsLogReportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'message' => $this->message,
            'receiver_number' => $this->receiver_number,
            'sender_number' => $this->sender_number,
            'sender_getaway' => $this->sender_getaway,
            'log_message' => $this->log_message,
            'status' => $this->status
        ];
    }
}
