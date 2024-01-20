<?php

namespace App\Http\Controllers;

use App\Actions\ShowCompanyController;
use App\Actions\UpdateCompanyController;
use App\Http\Requests\UpdateCompanyControllerRequest;
use Illuminate\Http\JsonResponse;

class CompanyController extends Controller
{
    public function show(int $companyId): JsonResponse
    {
        return (new ShowCompanyController())($companyId);
    }

    public function update(UpdateCompanyControllerRequest $request, int $companyId): JsonResponse
    {
        return (new UpdateCompanyController())($request, $companyId);
    }
}
