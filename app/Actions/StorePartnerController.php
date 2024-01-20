<?php

namespace App\Actions;

use App\Models\Partner;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StorePartnerController
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'order' => 'required|integer|unique:partners,order',
            'name' => 'required|min:5|max:100|string',
            'img' => 'required|string',
            'desc' => 'sometimes|min:5',
        ]);

        try {
            $partner = Partner::create($validated);

            return response()->json($partner);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
