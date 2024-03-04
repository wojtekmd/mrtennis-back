<?php

namespace App\Actions;

use App\Http\Requests\StoreTournamentImageControllerRequest;
use App\Models\Tournament;
use App\Models\TournamentImage;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class StoreTournamentImageController
{
    public function __invoke(StoreTournamentImageControllerRequest $request, int $tournamentId): JsonResponse
    {
        $validated = $request->validated();

        try {
            if (Tournament::find($tournamentId)) {
                $file = $validated['file'];
                $fileName = time() . '_' . $file->getClientOriginalName();

                Storage::putFileAs('public/tournaments/' . $tournamentId, $file, $fileName);

                $tournamentImage = TournamentImage::create([
                    'tournament_id' => $tournamentId,
                    'path' => '/storage/tournaments/' . $tournamentId . '/' . $fileName,
                ]);

                return response()->json($tournamentImage);
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
