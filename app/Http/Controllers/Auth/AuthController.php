<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAuthUserDataRequest;
use App\Http\Requests\VerifyCodeRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(
        public AuthService $authService
    )
    {
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Throwable
     */
    public function loginOrSignUp(Request $request)
    {
        $user = $this->authService->loginOrSignUpUser(
            $request->input('phone_number')
        );

        return apiResponse(
            message: 'Welcome, Now you have verify token that send to your phone.',
            body: UserResource::make($user)
        );
    }

    /**
     * @param VerifyCodeRequest $request
     * @return JsonResponse
     * @throws \ErrorException
     * @throws \Throwable
     */
    public function verifyToken(VerifyCodeRequest $request)
    {
        $verify_token = $this->authService->verifyToken(
            $request->input('phone_number'),
            $request->input('verify_code')
        );

        return apiResponse(
            message: 'You are now logged in.',
            body: ['access_token' => $verify_token]
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return apiResponse(
            message: 'You are now logout.',
        );
    }

    /**
     * @return JsonResponse
     */
    public function getCurrentUser()
    {
        return apiResponse(
            message: 'Current user data.',
            body: UserResource::make(auth()->user())
        );
    }

    /**
     * @param UpdateAuthUserDataRequest $request
     * @return JsonResponse
     * @throws \Throwable
     */
    public function updateUserData(UpdateAuthUserDataRequest $request)
    {
        return apiResponse(
            message: 'Current user data.',
            body: UserResource::make($this->authService->updateAuthUserData(
                $request->input('name')
            ))
        );
    }
}
