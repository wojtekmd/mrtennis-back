<?php

namespace App\Http\Controllers;

use App\Actions\LoginAuthenticatedController;
use App\Actions\LogoutAuthenticatedController;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthenticatedController extends Controller
{

    public function store(LoginRequest $request): JsonResponse
    {
        return (new LoginAuthenticatedController())($request);
    }

    public function destroy(Request $request): JsonResponse
    {
        return (new LogoutAuthenticatedController())($request);
    }
}
