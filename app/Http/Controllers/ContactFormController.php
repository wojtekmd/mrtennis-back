<?php

namespace App\Http\Controllers;

use App\Actions\SendContactFormController;
use App\Http\Requests\SendContactFormControllerRequest;
use Illuminate\Http\JsonResponse;

class ContactFormController extends Controller
{
    public function send(SendContactFormControllerRequest $request): JsonResponse
    {
        return (new SendContactFormController())($request);
    }
}
