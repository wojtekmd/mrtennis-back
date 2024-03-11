<?php

namespace App\Actions;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class TestTestController
{
    public function __invoke(Request $request): JsonResponse
    {
        $validate = $request->validate([
            'command' => ['required', 'string'],
        ]);

        try {
            Artisan::call($validate['command']);

            return response()->json(['message' => 'ok'], 200);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
