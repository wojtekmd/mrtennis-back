<?php

namespace App\Http\Controllers;

use App\Actions\DeleteTournamentImageController;
use App\Actions\StoreTournamentImageController;
use App\Http\Requests\StoreTournamentImageControllerRequest;
use Illuminate\Http\JsonResponse;

class TournamentImageController extends Controller
{

    public function store(StoreTournamentImageControllerRequest $request, int $tournamentId): JsonResponse
    {
        return (new StoreTournamentImageController())($request, $tournamentId);
    }

    public function delete(int $tournamentId, int $tournamentImageId): JsonResponse
    {
        return (new DeleteTournamentImageController())($tournamentId, $tournamentImageId);
    }
}
