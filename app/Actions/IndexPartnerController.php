<?php

namespace App\Actions;

use App\Models\Partner;
use Illuminate\Http\JsonResponse;

class IndexPartnerController
{
    public function __invoke(): JsonResponse
    {

        try {
            $partners = Partner::get();
            return response()->json($partners);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
