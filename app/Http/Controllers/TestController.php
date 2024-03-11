<?php

namespace App\Http\Controllers;

use App\Actions\TestTestController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function test(Request $request): JsonResponse
    {
        return (new TestTestController())($request);
    }
}
