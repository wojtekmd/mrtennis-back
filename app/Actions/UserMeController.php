<?php

namespace App\Actions;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserMeController
{
    public function __invoke(): JsonResponse
    {

        try {
            $user = Auth::user();

            return response()->json($user);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
