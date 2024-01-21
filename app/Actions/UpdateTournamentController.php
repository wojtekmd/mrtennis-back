<?php

namespace App\Actions;

use App\Http\Requests\UpdateTournamentControllerRequest;
use App\Models\Tournament;
use Illuminate\Http\JsonResponse;

class UpdateTournamentController
{
    public function __invoke(UpdateTournamentControllerRequest $request, int $tournamentId): JsonResponse
    {
        try {
            $validated = $request->validated();

            if ($tournament = Tournament::find($tournamentId)) {
                $tournament->name = $validated['name'];
                $tournament->desc = $validated['desc'];
                $tournament->tournament_date = $validated['tournament_date'];
                $tournament->tournament_place = $validated['tournament_place'];
                $tournament->tournament_img = $validated['tournament_img'];
                $tournament->max_participants = $validated['max_participants'];
                $tournament->save();

                return response()->json($tournament);
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
