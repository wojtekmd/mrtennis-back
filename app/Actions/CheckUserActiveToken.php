<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class CheckUserActiveToken
{
    public function __invoke(User $user): void
    {
        $hasActiveToken = (boolean)$user->personalAccessToken;

        if ($hasActiveToken) {
            try {
                $user->personalAccessToken->delete();
            } catch (\Throwable $e) {
                Log::info($e->getMessage());
            }
        }
    }
}
