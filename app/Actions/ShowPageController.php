<?php

namespace App\Actions;

use App\Models\Page;
use Illuminate\Http\JsonResponse;

class ShowPageController
{
    public function __invoke(int $pageId): JsonResponse
    {
        try {
            if ($page = Page::with(['elements'])->find($pageId)) {
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
