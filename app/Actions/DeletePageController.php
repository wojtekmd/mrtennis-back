<?php

namespace App\Actions;

use App\Models\Page;
use Illuminate\Http\JsonResponse;

class DeletePageController
{
    public function __invoke(int $pageId): JsonResponse
    {
        try {
            if ($page = Page::find($pageId)) {

                if ($page->id > 17 && !$page->is_custom) {
                    $page->delete();
                    return response()->json();
                }

                return response()->json(['message' => 'Nie można usunąć tej strony'], 405);
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
