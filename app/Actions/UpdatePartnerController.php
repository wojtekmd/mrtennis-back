<?php

namespace App\Actions;

use App\Models\Partner;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UpdatePartnerController
{
    public function __invoke(Request $request, int $partnerId): JsonResponse
    {
        $validated = $request->validate([
            'order' => 'required|integer|unique:partners,order',
            'name' => 'required|min:5|max:100|string',
            'img' => 'required|string',
            'desc' => 'sometimes|min:5',
        ]);

        try {
            if ($partner = Partner::find($partnerId)) {

                $partner->order = $validated['order'];
                $partner->name = $validated['name'];
                $partner->img = $validated['img'];
                $partner->desc = $validated['$partner'] ?? $partner->desc;
                $partner->save();

                return response()->json($partner);
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
