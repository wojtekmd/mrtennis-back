<?php

namespace App\Actions;

use App\Http\Requests\UpdatePartnerControllerRequest;
use App\Models\Partner;
use Illuminate\Http\JsonResponse;

class UpdatePartnerController
{
    public function __invoke(UpdatePartnerControllerRequest $request, int $partnerId): JsonResponse
    {
        $validated = $request->validated();

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
