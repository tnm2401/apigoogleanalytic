<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function(Request $request){
    return response()->json(['data' => ['ok']], 200);
})->name('api.index');

Route::prefix('browser')->group(function () {
    Route::get('/', [App\Http\Controllers\GAController::class, 'browser'])->name('api.browser');
    Route::get('/yesterday', [App\Http\Controllers\GAController::class, 'browser_yesterday'])->name('api.browser.yesterday');
    Route::get('/7-day', [App\Http\Controllers\GAController::class, 'browser_7day'])->name('api.browser.7day');
    Route::get('/week', [App\Http\Controllers\GAController::class, 'browser_thisweek'])->name('api.browser.thisweek');
    Route::get('/30-day', [App\Http\Controllers\GAController::class, 'browser_30day'])->name('api.browser.30day');
    Route::get('/month', [App\Http\Controllers\GAController::class, 'browser_thismonth'])->name('api.browser.thismonth');
    Route::get('/year', [App\Http\Controllers\GAController::class, 'browser_thisyear'])->name('api.browser.thisyear');
});

Route::prefix('access')->group(function () {
    Route::get('/', [App\Http\Controllers\GAController::class, 'access'])->name('api.access');
    Route::get('/yesterday', [App\Http\Controllers\GAController::class, 'access_yesterday'])->name('api.access.yesterday');
    Route::get('/7-day', [App\Http\Controllers\GAController::class, 'access_7day'])->name('api.access.7day');
    Route::get('/week', [App\Http\Controllers\GAController::class, 'access_thisweek'])->name('api.accesss.thisweek');
    Route::get('/30-day', [App\Http\Controllers\GAController::class, 'access_30day'])->name('api.access.30day');
    Route::get('/month', [App\Http\Controllers\GAController::class, 'access_thismonth'])->name('api.access.thismonth');
    Route::get('/year', [App\Http\Controllers\GAController::class, 'access_thisyear'])->name('api.access.thisyear');
});

Route::prefix('country')->group(function () {
    Route::get('/', [App\Http\Controllers\GAController::class, 'country'])->name('api.country');
    Route::get('/yesterday', [App\Http\Controllers\GAController::class, 'country_yesterday'])->name('api.country.yesterday');
    Route::get('/7-day', [App\Http\Controllers\GAController::class, 'country_7day'])->name('api.country.7day');
    Route::get('/week', [App\Http\Controllers\GAController::class, 'country_thisweek'])->name('api.country.thisweek');
    Route::get('/30-day', [App\Http\Controllers\GAController::class, 'country_30day'])->name('api.country.30day');
    Route::get('/month', [App\Http\Controllers\GAController::class, 'country_thismonth'])->name('api.country.thismonth');
    Route::get('/year', [App\Http\Controllers\GAController::class, 'country_thisyear'])->name('api.country.thisyear');
});

Route::prefix('pageview')->group(function () {
    Route::get('/', [App\Http\Controllers\GAController::class, 'pageview'])->name('api.pageview');
    Route::get('/yesterday', [App\Http\Controllers\GAController::class, 'pageviewyesterday'])->name('api.pageview.yesterday');
    Route::get('/7-day', [App\Http\Controllers\GAController::class, 'pageview7day'])->name('api.pageview.7day');
    Route::get('/week', [App\Http\Controllers\GAController::class, 'pageviewweek'])->name('api.pageview.thisweek');
    Route::get('/30-day', [App\Http\Controllers\GAController::class, 'pageview30day'])->name('api.pageview.30day');
    Route::get('/month', [App\Http\Controllers\GAController::class, 'pageviewthismonth'])->name('api.pageview.thismonth');
    Route::get('/year', [App\Http\Controllers\GAController::class, 'pageviewthisyear'])->name('api.pageview.thisyear');
});

Route::prefix('device')->group(function () {
    Route::get('/', [App\Http\Controllers\GAController::class, 'device'])->name('api.device');
    Route::get('/yesterday', [App\Http\Controllers\GAController::class, 'deviceyesterday'])->name('api.device.yesterday');
    Route::get('/7-day', [App\Http\Controllers\GAController::class, 'device7day'])->name('api.device.7day');
    Route::get('/week', [App\Http\Controllers\GAController::class, 'deviceweek'])->name('api.device.thisweek');
    Route::get('/30-day', [App\Http\Controllers\GAController::class, 'device30day'])->name('api.device.30day');
    Route::get('/month', [App\Http\Controllers\GAController::class, 'devicethismonth'])->name('api.device.thismonth');
    Route::get('/year', [App\Http\Controllers\GAController::class, 'devicethisyear'])->name('api.device.thisyear');
});

Route::prefix('referral')->group(function () {
    Route::get('/', [App\Http\Controllers\GAController::class, 'referral'])->name('api.referral');
    Route::get('/yesterday', [App\Http\Controllers\GAController::class, 'referralyesterday'])->name('api.referral.yesterday');
    Route::get('/7-day', [App\Http\Controllers\GAController::class, 'referral7day'])->name('api.referral.7day');
    Route::get('/week', [App\Http\Controllers\GAController::class, 'referralweek'])->name('api.referral.thisweek');
    Route::get('/30-day', [App\Http\Controllers\GAController::class, 'referral30day'])->name('api.referral.30day');
    Route::get('/month', [App\Http\Controllers\GAController::class, 'referralthismonth'])->name('api.referral.thismonth');
    Route::get('/year', [App\Http\Controllers\GAController::class, 'referralthisyear'])->name('api.referral.thisyear');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [App\Http\Controllers\GAController::class, 'dashboard'])->name('api.dashboard');
    Route::get('/yesterday', [App\Http\Controllers\GAController::class, 'dashboardyesterday'])->name('api.dashboard.yesterday');
    Route::get('/7-day', [App\Http\Controllers\GAController::class, 'dashboard7day'])->name('api.dashboard.7day');
    Route::get('/week', [App\Http\Controllers\GAController::class, 'dashboardweek'])->name('api.dashboard.thisweek');
    Route::get('/30-day', [App\Http\Controllers\GAController::class, 'dashboard30day'])->name('api.dashboard.30day');
    Route::get('/month', [App\Http\Controllers\GAController::class, 'dashboardthismonth'])->name('api.dashboard.thismonth');
    Route::get('/year', [App\Http\Controllers\GAController::class, 'dashboardthisyear'])->name('api.dashboard.thisyear');
});