<?php

namespace App\Actions;

use App\Models\Page;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowPageController
{
    public function __invoke(Request $request, $pageId): JsonResponse
    {
        $validated = $request->validate([
            'search_by_route' => 'required|bool'
        ]);

        try {
            $page = Page::with(['elements']);
            if ($validated['search_by_route']) {
                $page = $page->where('route', $pageId);
            } else {
                $page = $page->where('id', $pageId);
            }

            if ($page = $page->first()) {
                $pageCopy = collect($page)->toArray();
                $pageCopy['elements'] = [];

                foreach ($page->elements as $element) {
                    $pageCopy['elements'][$element->slug] = $element;
                }

                return response()->json($pageCopy);
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
