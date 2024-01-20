<?php

namespace App\Http\Controllers;

use App\Actions\DestroyPartnerController;
use App\Actions\IndexPartnerController;
use App\Actions\ShowPartnerController;
use App\Actions\StorePartnerController;
use App\Actions\UpdatePartnerController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(): JsonResponse
    {
        return (new IndexPartnerController())();
    }

    public function show(int $partnerId): JsonResponse
    {
        return (new ShowPartnerController())($partnerId);
    }

    public function store(Request $request): JsonResponse
    {
        return (new StorePartnerController())($request);
    }

    public function update(Request $request, int $partnerId): JsonResponse
    {
        return (new UpdatePartnerController())($request, $partnerId);
    }

    public function destroy(int $partnerId): JsonResponse
    {
        return (new DestroyPartnerController())($partnerId);
    }
}
