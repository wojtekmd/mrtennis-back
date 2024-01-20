<?php

namespace App\Actions;

use App\Http\Requests\UpdateCompanyControllerRequest;
use App\Models\Company;
use Illuminate\Http\JsonResponse;

class UpdateCompanyController
{
    public function __invoke(UpdateCompanyControllerRequest $request, int $companyId): JsonResponse
    {
        $validated = $request->validated();

        try {
            if ($company = Company::find($companyId)) {
                $company->about = $validated['about'];
                $company->contact = $validated['contact'];
                $company->social_media = $validated['social_medias'];
                $company->open_hours = $validated['open_hours'];
                $company->save();

                return response()->json($company);
            }

            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
