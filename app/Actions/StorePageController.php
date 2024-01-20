<?php

namespace App\Actions;

use App\Http\Requests\StorePageControllerRequest;
use App\Models\Page;
use Illuminate\Http\JsonResponse;

class StorePageController
{
    public function __invoke(StorePageControllerRequest $request): JsonResponse
    {
        $validated = $request->validated();

        try {
            $validated['name'] = mb_strtolower($validated['name']);
            $validated['route'] = mb_strtolower($validated['route']);

            $page = Page::create($validated);

            return response()->json($page);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
