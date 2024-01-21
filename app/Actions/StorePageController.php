<?php

namespace App\Actions;

use App\Http\Requests\StorePageControllerRequest;
use App\Models\Page;
use App\Models\PageElement;
use Illuminate\Http\JsonResponse;

class StorePageController
{
    public function __invoke(StorePageControllerRequest $request): JsonResponse
    {
        $validated = $request->validated();

        try {
            foreach ($validated['name'] as $k => $n) {
                $validated['name'][$k] = strtoupper($n);
            }

            $validated['route'] = str_replace(' ', '-', mb_strtolower($validated['name']['pl']));

            $page = Page::create($validated);

            $this->storeStructurePageElements($page->id);

            $page = Page::find($page->id);

            return response()->json($page);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    private function storeStructurePageElements(int $pageId): void
    {
        $elements = [
            [
                'page_id' => $pageId,
                'is_active' => true,
                'slug' => 'header',
                'content' => [
                    'pl' => '',
                    'en' => '',
                    'de' => '',
                ],
            ],
            [
                'page_id' => $pageId,
                'is_active' => true,
                'slug' => 'content',
                'content' => [
                    'pl' => '',
                    'en' => '',
                    'de' => '',
                ],
            ],
            [
                'page_id' => $pageId,
                'is_active' => true,
                'slug' => 'img',
                'content' => ['url' => '/gallery/4.webp'],
            ],
        ];

        foreach ($elements as $element) {
            PageElement::create($element);
        }
    }
}
