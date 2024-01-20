<?php

namespace App\Actions;

use App\Models\Page;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndexPageController
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'in_menu' => 'sometimes|boolean'
        ]);

        try {
            $pages = Page::where('is_active', true);

            if (isset($validated['in_menu'])) {
                $pages = $pages->where('in_menu', $validated['in_menu']);
            }

            $pages = $pages->get();

            return response()->json($pages);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
