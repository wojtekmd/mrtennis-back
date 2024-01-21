<?php

namespace App\Actions;

use App\Http\Requests\StoreTournamentControllerRequest;
use App\Models\Tournament;
use Illuminate\Http\JsonResponse;

class StoreTournamentController
{
    public function __invoke(StoreTournamentControllerRequest $request): JsonResponse
    {
        $validated = $request->validated();

        try {
            $tournament = Tournament::create($validated);

            return response()->json($tournament);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
