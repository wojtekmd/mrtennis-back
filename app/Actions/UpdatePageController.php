<?php

namespace App\Actions;

use App\Models\Page;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UpdatePageController
{
    public function __invoke(Request $request, int $pageId): JsonResponse
    {
        $validated = $request->validate([
            'is_active' => 'required|boolean',
            'in_menu' => 'required|boolean',
            'name' => 'required|min:5|max:100|string|unique:pages,name|regex:/^[a-zA-Z]+$/',
            'desc' => 'sometimes|min:5',
        ]);

        try {
            if ($page = Page::with(['elements'])->find($pageId)) {

                $page->is_active = $validated['is_active'];
                $page->in_menu = $validated['in_menu'];
                $page->name = mb_strtolower($validated['name']);
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
