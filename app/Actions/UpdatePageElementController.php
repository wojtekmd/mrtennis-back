<?php

namespace App\Actions;

use App\Http\Requests\UpdatePageControllerRequest;
use App\Models\Page;
use App\Models\PageElement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UpdatePageElementController
{
    public function __invoke(Request $request, int $pageId, int $pageElementId): JsonResponse
    {
        $validated = $request->validate([

        ]);

        try {
            if ($pageElement = PageElement::where(['page_id' => $pageId, 'id' => $pageElementId])->first()) {


                return response()->json($pageElement);
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
