<?php

namespace App\Http\Controllers;

use App\Actions\UpdatePageElementController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PageElementController extends Controller
{
    public function update(Request $request, int $pageId, int $pageElementId): JsonResponse
    {
        return (new UpdatePageElementController())($request, $pageId, $pageElementId);
    }
}
