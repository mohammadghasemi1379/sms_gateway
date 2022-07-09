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

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        public SmsLog             $smsLog,
        private SendSmsRepository $sendSmsRepository
    )
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $method = Config::get('sms_gateways.' . $this->smsLog->sender_getaway . '.method');

        $send_sms_to_getaway = Http::withHeaders(Config::get('sms_gateways.' . $this->smsLog->sender_getaway . '.headers'))
            ->$method(
                Config::get('sms_gateways.' . $this->smsLog->sender_getaway . '.api_url'),
                Config::get('sms_gateways.' . $this->smsLog->sender_getaway . '.options')
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
