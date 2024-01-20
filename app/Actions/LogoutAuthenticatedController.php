<?php

namespace App\Actions;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LogoutAuthenticatedController
{
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $request->user()->tokens()->delete();

            return response()->json(['message' => 'Zostałeś wylogowany pomyślnie.']);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
