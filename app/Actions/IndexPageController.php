<?php

namespace App\Actions;

use App\Http\Requests\IndexPageControllerRequest;
use App\Models\Page;
use Illuminate\Http\JsonResponse;

class IndexPageController
{
    public function __invoke(IndexPageControllerRequest $request): JsonResponse
    {
        $validated = $request->validated();

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
