<?php

use App\Http\Controllers\AuthenticatedController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PageElementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthenticatedController::class, 'store'])->middleware('guest')->name('login');
Route::post('/logout', [AuthenticatedController::class, 'destroy'])->middleware('auth:api')->name('logout');

//Route::group(['middleware' => ['auth:api']], function () {
//    Route::get('/user', function () {
//        return \Illuminate\Support\Facades\Auth::user();
//    });

Route::group([
    'prefix' => 'pages'
], function () {
    Route::get('', [PageController::class, 'index']);
    Route::get('/{pageId}', [PageController::class, 'show']);
    Route::post('', [PageController::class, 'store']);
    Route::patch('/{pageId}', [PageController::class, 'update']);

    Route::group([
        'prefix' => 'elements'
    ], function () {
        Route::post('', [PageElementController::class, 'store']);
        Route::patch('/{pageElementId}', [PageElementController::class, 'update']);
    });
});

Route::group([
    'prefix' => 'companies'
], function () {
    Route::get('/{companyId}', [CompanyController::class, 'show']);
    Route::patch('/{companyId}', [CompanyController::class, 'update']);
});
//});
