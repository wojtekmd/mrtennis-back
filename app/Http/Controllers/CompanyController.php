<?php

namespace App\Http\Controllers;

use App\Actions\IndexPageController;
use App\Actions\ShowCompanyController;
use App\Actions\ShowPageController;
use App\Actions\StorePageController;
use App\Actions\UpdateCompanyController;
use App\Actions\UpdatePageController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show(int $companyId): JsonResponse
    {
        return (new ShowCompanyController())($companyId);
    }

    public function update(Request $request, int $companyId): JsonResponse
    {
        return (new UpdateCompanyController())($request, $companyId);
    }
}
