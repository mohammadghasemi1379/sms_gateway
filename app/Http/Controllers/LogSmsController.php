<?php

namespace App\Http\Controllers;

use App\Http\Resources\SmsLogReportResource;
use App\Services\LogSmsService;
use Illuminate\Http\Request;

class LogSmsController extends Controller
{
    public function __construct(public LogSmsService $logSmsService)
    {
    }

    public function authSummeryReport(Request $request)
    {
        return apiResponse(
            message: 'summery logs reports.',
            body: $this->logSmsService->authLogSmsReport()
        );
    }

    public function authHistoryReport(Request $request)
    {
        $data = $this->logSmsService->authLogHistory();

        return apiResponse(
            message: 'summery logs reports.',
            body: SmsLogReportResource::collection($data),
            meta: [
                'total' => $data->total(),
                'current_page' => $data->currentPage()
            ]
        );
    }
}
