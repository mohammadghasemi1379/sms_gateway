<?php

namespace App\Jobs;

use App\Enums\LogStatusEnum;
use App\Models\SmsLog;
use App\Repositories\SendSmsRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class SendSmsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private SendSmsRepository $sendSmsRepository;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        public SmsLog $smsLog,
    )
    {
        $this->sendSmsRepository = new SendSmsRepository();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $method = Config::get('sms_gateways.' . $this->smsLog->sender_getaway . '.method');

        $request_body = Config::get('sms_gateways.' . $this->smsLog->sender_getaway . '.options') + [
                Config::get('sms_gateways.' . $this->smsLog->sender_getaway . '.message_label') => $this->smsLog->message,
                Config::get('sms_gateways.' . $this->smsLog->sender_getaway . '.receiver_label') => $this->smsLog->receiver_number,
            ];

        if (Config::has('sms_gateways.' . $this->smsLog->sender_getaway . '.sender_phone_number')){
            $request_body + [
                Config::has('sms_gateways.' . $this->smsLog->sender_getaway . '.sender_phone_number')
            ];
        }

        $send_sms_to_getaway = Http::withHeaders(Config::get('sms_gateways.' . $this->smsLog->sender_getaway . '.headers'))
            ->$method(
                Config::get('sms_gateways.' . $this->smsLog->sender_getaway . '.api_url'),
                $request_body
            );

        $this->sendSmsRepository->updateLogWithStatus(
            $this->smsLog,
            LogStatusEnum::SENT,
            $send_sms_to_getaway->body()
        );
    }

    public function failed(\Throwable $exception)
    {
        $this->sendSmsRepository->updateLogWithStatus(
            $this->smsLog,
            LogStatusEnum::FAIL,
            'Something went wrong in queue job.'
        );
    }
}
