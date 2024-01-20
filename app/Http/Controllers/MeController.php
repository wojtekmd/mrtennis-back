<?php

namespace App\Http\Controllers;

use App\Actions\UserMeController;
use Illuminate\Http\JsonResponse;

class MeController extends Controller
{
    public function user(): JsonResponse
    {
        return (new UserMeController())();
    }
}
