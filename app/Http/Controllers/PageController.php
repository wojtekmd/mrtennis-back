<?php

namespace App\Http\Controllers;

use App\Actions\DeletePageController;
use App\Actions\IndexPageController;
use App\Actions\ShowPageController;
use App\Actions\StorePageController;
use App\Actions\UpdatePageController;
use App\Http\Requests\IndexPageControllerRequest;
use App\Http\Requests\StorePageControllerRequest;
use App\Http\Requests\UpdatePageControllerRequest;
use Illuminate\Http\JsonResponse;

class PageController extends Controller
{
    public function index(IndexPageControllerRequest $request): JsonResponse
    {
        return (new IndexPageController())($request);
    }

    public function show(int $pageId): JsonResponse
    {
        return (new ShowPageController())($pageId);
    }

    public function store(StorePageControllerRequest $request): JsonResponse
    {
        return (new StorePageController())($request);
    }

    public function update(UpdatePageControllerRequest $request, int $pageId): JsonResponse
    {
        return (new UpdatePageController())($request, $pageId);
    }

    public function delete(int $pageId): JsonResponse
    {
        return (new DeletePageController())($pageId);
    }
}
