<?php

namespace App\Actions;

use App\Models\Tournament;
use Illuminate\Http\JsonResponse;

class IndexTournamentController
{
    public function __invoke(): JsonResponse
    {
        try {
            $tournaments = Tournament::orderBy('tournament_date', 'desc')->get();

            return response()->json($tournaments);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
