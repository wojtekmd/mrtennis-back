<?php

namespace App\Actions;

use App\Models\Partner;
use Illuminate\Http\JsonResponse;

class ShowPartnerController
{
    public function __invoke(int $partnerId): JsonResponse
    {
        try {
            if ($partner = Partner::find($partnerId)) {
                return response()->json($partner);
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
