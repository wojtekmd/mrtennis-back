<?php

namespace App\Actions;

use App\Models\TournamentImage;
use Illuminate\Http\JsonResponse;

class DeleteTournamentImageController
{
    public function __invoke(int $tournamentId, int $tournamentImageId): JsonResponse
    {
        try {
            if ($tournamentImage = TournamentImage::where('tournament_id', $tournamentId)->find($tournamentImageId)) {
                $tournamentImage->delete();
                return response()->json();
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
