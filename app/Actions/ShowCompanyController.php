<?php

namespace App\Actions;

use App\Models\Company;
use Illuminate\Http\JsonResponse;

class ShowCompanyController
{
    public function __invoke(int $companyId): JsonResponse
    {
        try {
            if ($company = Company::find($companyId)) {
                return response()->json($company);
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
