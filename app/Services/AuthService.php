<?php

namespace App\Services;

use App\Enums\LogStatusEnum;
use App\Models\User;
use App\Repositories\LogSmsRepository;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;

class AuthService
{
    /**
     * @param string $phone_number
     * @return User
     * @throws \Throwable
     */
    public function loginOrSignUpUser(string $phone_number): User
    {
        $user = User::firstOrCreate([
            'phone_number' => $phone_number,
        ]);
        try {
            DB::beginTransaction();

            $user->update([
                'verify_code' => app()->environment() == 'production' ? rand(100000, 999999) : 123456,
                'login_attempts' => $user->login_attempts + 1,
            ]);

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
        return $user;
    }

    /**
     * @param string $phone_number
     * @param int $verify_code
     * @return string
     * @throws \ErrorException
     * @throws \Throwable
     */
    public function verifyToken(string $phone_number, int $verify_code): string
    {
        $user = User::query()
            ->where('phone_number', $phone_number)
            ->firstOrFail();

        try {
            if ($user->verify_code == $verify_code) {
                DB::beginTransaction();

                $user->update([
                    'last_login_at' => now(),
                    'login_attempts' => 1,
                    'verify_code' => null,
                ]);

                //remove exists token
                $user->tokens()->delete();

                DB::commit();
            } else {
                throw new \ErrorException('Invalid verify token');
            }
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }

        return $user->createToken('user-access-token')->plainTextToken;
    }

    /**
     * @param string $name
     * @return user
     * @throws \Throwable
     */
    public function updateAuthUserData(string $name): user
    {
        $user = auth()->user();
        try {
            DB::beginTransaction();

            $user->update([
                'name' => $name
            ]);

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }

        return $user->refresh();
    }
}
