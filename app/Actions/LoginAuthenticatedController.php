<?php

namespace App\Actions;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class LoginAuthenticatedController
{
    public function __invoke(LoginRequest $request): JsonResponse
    {
        $validate = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        try {
            $request->authenticate();

            $user = User::where('email', $validate['email'])->first();

            if (!$user || !Hash::check($validate['password'], $user->password)) {
                throw ValidationException::withMessages([
                    'email' => 'Błędny login lub hasło.',
                ]);
            }

            $device = substr($request->userAgent() ?? '', 0, 255);

            (new CheckUserActiveToken())($user);

            return response()->json([
                'user_id' => $user->id,
                'user_name' => $user->name,
                'access_token' => $user->createToken($device, ['server:update'])->plainTextToken,
                'message' => 'Zostałeś zalogowany pomyślnie'
            ], ResponseAlias::HTTP_CREATED);

        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
