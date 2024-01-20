<?php

namespace App\Actions;

use App\Models\Page;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StorePageController
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'is_active' => 'required|boolean',
            'in_menu' => 'required|boolean',
            'is_custom' => 'required|boolean|in:1',
            'route' => 'required|min:5|max:100|string|unique:pages,route|regex:/^[a-zA-Z]+$/',
            'name' => 'required|min:5|max:100|string|unique:pages,name|regex:/^[a-zA-Z]+$/',
            'desc' => 'sometimes|min:5',
        ]);

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
