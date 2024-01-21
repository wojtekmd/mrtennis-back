<?php

namespace App\Http\Controllers;

use App\Actions\DeleteTournamentController;
use App\Actions\IndexTournamentController;
use App\Actions\ShowTournamentController;
use App\Actions\StoreTournamentController;
use App\Actions\UpdateTournamentController;
use App\Http\Requests\StoreTournamentControllerRequest;
use App\Http\Requests\UpdateTournamentControllerRequest;
use Illuminate\Http\JsonResponse;

class TournamentController extends Controller
{
    public function index(): JsonResponse
    {
        return (new IndexTournamentController())();
    }

    public function show(int $tournamentId): JsonResponse
    {
        return (new ShowTournamentController())($tournamentId);
    }

    public function store(StoreTournamentControllerRequest $request): JsonResponse
    {
        return (new StoreTournamentController())($request);
    }

    public function update(UpdateTournamentControllerRequest $request, int $tournamentId): JsonResponse
    {
        return (new UpdateTournamentController())($request, $tournamentId);
    }

    public function delete(int $tournamentId): JsonResponse
    {
        return (new DeleteTournamentController())($tournamentId);
    }
}
