<?php

namespace App\Http\Controllers;

use App\Actions\SendContactFormController;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ContactFormController extends Controller
{
    public function send(Request $request): JsonResponse
    {
        return (new SendContactFormController())($request);
    }
}
