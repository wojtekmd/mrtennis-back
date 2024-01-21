<?php

namespace App\Actions;

use App\Models\Tournament;
use Illuminate\Http\JsonResponse;

class DeleteTournamentController
{
    public function __invoke(int $tournamentId): JsonResponse
    {
        try {
            if ($tournament = Tournament::find($tournamentId)) {
                $tournament->delete();
                return response()->json();
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
