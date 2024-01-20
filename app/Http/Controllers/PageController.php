<?php

namespace App\Http\Controllers;

use App\Actions\IndexPageController;
use App\Actions\ShowPageController;
use App\Actions\StorePageController;
use App\Actions\UpdatePageController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return (new IndexPageController())($request);
    }

    public function show(int $pageId): JsonResponse
    {
        return (new ShowPageController())($pageId);
    }

    public function store(Request $request): JsonResponse
    {
        return (new StorePageController())($request);
    }

    public function update(Request $request, int $pageId): JsonResponse
    {
        return (new UpdatePageController())($request, $pageId);
    }
}
