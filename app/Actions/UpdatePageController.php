<?php

namespace App\Actions;

use App\Http\Requests\UpdatePageControllerRequest;
use App\Models\Page;
use Illuminate\Http\JsonResponse;

class UpdatePageController
{
    public function __invoke(UpdatePageControllerRequest $request, int $pageId): JsonResponse
    {
        $validated = $request->validated();

        try {
            if ($page = Page::with(['elements'])->find($pageId)) {

                $page->is_active = $validated['is_active'];
                $page->in_menu = $validated['in_menu'];
                $page->name = $validated['name'];
                $page->desc = $validated['desc'] ?? $page->desc;
                $page->save();

                return response()->json($page);
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
