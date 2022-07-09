<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendSmsWithDefaultGetawayRequest;
use App\Services\SendSmsService;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class SendSmsController extends Controller
{
    public function __construct(
        public SendSmsService $sendSmsService
    )
    {
    }

    /**
     * @throws \Throwable
     */
    public function sendSmsWithDefaultGetaway(SendSmsWithDefaultGetawayRequest $request)
    {
        $this->sendSmsService->SendSmsWithDefaultGetaway(
            $request->input('receiver_number'),
            $request->input('message_body'),
            auth()->id()
        );

        return apiResponse(
            message: 'Your SMS has been queued.',
            status_code: HttpResponse::HTTP_CREATED
        );
    }
}
