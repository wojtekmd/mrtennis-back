<?php

namespace App\Actions;

use App\Http\Requests\SendContactFormControllerRequest;
use App\Notifications\ContactFromNotification;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Notification;

class SendContactFormController
{
    public function __invoke(SendContactFormControllerRequest $request): JsonResponse
    {
        $validated = $request->validated();

        try {
            Notification::route('mail', getenv('MAIL_ADDRESS'))
                ->notify(new ContactFromNotification($validated));

            return response()->json();
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
