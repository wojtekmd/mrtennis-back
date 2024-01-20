<?php

namespace App\Actions;

use App\Http\Requests\StorePartnerControllerRequest;
use App\Models\Partner;
use Illuminate\Http\JsonResponse;

class StorePartnerController
{
    public function __invoke(StorePartnerControllerRequest $request): JsonResponse
    {
        $validated = $request->validated();

        try {
            $partner = Partner::create($validated);

            return response()->json($partner);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
