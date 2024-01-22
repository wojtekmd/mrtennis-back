<?php

use App\Http\Controllers\AuthenticatedController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\MeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PageElementController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\TournamentController;
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

Route::group([
    'prefix' => 'pages'
], function () {
    Route::get('', [PageController::class, 'index']);
    Route::get('/{pageId}', [PageController::class, 'show']);
});

Route::group([
    'prefix' => 'companies'
], function () {
    Route::get('/{companyId}', [CompanyController::class, 'show']);
});

Route::group([
    'prefix' => 'partners'
], function () {
    Route::get('', [PartnerController::class, 'index']);
    Route::get('/{partnerId}', [PartnerController::class, 'show']);
});

Route::group([
    'prefix' => 'tournaments'
], function () {
    Route::get('/', [TournamentController::class, 'index']);
    Route::get('/{tournamentId}', [TournamentController::class, 'show']);
});

Route::post('send-contact-form', [ContactFormController::class, 'send']);

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/user', [MeController::class, 'user']);

    Route::group([
        'prefix' => 'pages'
    ], function () {
        Route::post('', [PageController::class, 'store']);
        Route::post('/{pageId}', [PageController::class, 'update']);
        Route::delete('/{pageId}', [PageController::class, 'delete']);

        Route::group([
            'prefix' => '{pageId}/elements'
        ], function () {
            Route::post('/{pageElementId}', [PageElementController::class, 'update']);
        });
    });

    Route::group([
        'prefix' => 'companies'
    ], function () {
        Route::post('/{companyId}', [CompanyController::class, 'update']);
    });

    Route::group([
        'prefix' => 'partners'
    ], function () {
        Route::post('', [PartnerController::class, 'store']);
        Route::patch('/{partnerId}', [PartnerController::class, 'update']);
        Route::delete('/{partnerId}', [PartnerController::class, 'destroy']);
    });

    Route::group([
        'prefix' => 'tournaments'
    ], function () {
        Route::post('', [TournamentController::class, 'store']);
        Route::post('/{tournamentId}', [TournamentController::class, 'update']);
        Route::delete('/{tournamentId}', [TournamentController::class, 'delete']);
    });
});
