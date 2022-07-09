<?php

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

if (!function_exists('apiResponse')) {
    /**
     * @param string $status
     * @param string|null $message
     * @param mixed|array $body
     * @param array $meta
     * @param int $status_code
     * @param array $header
     * @return JsonResponse
     */
    function apiResponse(string $status = 'success', string $message = null, mixed $body = [], array $meta = [], int $status_code = HttpResponse::HTTP_OK, array $header = []): JsonResponse
    {
        $data = compact('status', 'message', 'body');

        if (!empty($meta)) {
            $data = $data + ['meta' => $meta];
        }

        return response()
            ->json($data)
            ->withHeaders($header)
            ->setStatusCode($status_code);
    }
}

if (!function_exists('dialCodeArray')) {
    function dialCodeArray()
    {
        return Cache::rememberForever(
            'dial_code_codes_array',
            fn() => DB::table('country_codes')
                ->select('dial_code')
                ->get()
                ->pluck('dial_code')
                ->toArray()
        );
    }
}

if (!function_exists('countryCodeArray')) {
    function countryCodeArray()
    {
        return Cache::rememberForever(
            'country_codes_array',
            fn() => DB::table('country_codes')
                ->select(['dial_code', 'name', 'short_name'])
                ->get()
                ->toArray()
        );
    }
}

