<?php

namespace App\Actions;

use App\Notifications\ContactFromNotification;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class SendContactFormController
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|min:1|max:100|string',
            'surname' => 'required|min:1|max:100|string',
            'email' => 'required|email',
            'phoneNumber' => 'required|integer',
            'message' => 'required|string|min:5',
            'agreement' => 'required|boolean|in:1',
        ]);

        try {
            Notification::route('mail', getenv('MAIL_ADDRESS'))
                ->notify(new ContactFromNotification($validated));

            return response()->json();
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
