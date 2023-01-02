<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\EnginController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\AnalyseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\AuditController::class, 'index']);

Route::get('engins', [App\Http\Controllers\EnginController::class, 'index']);
Route::post('add-engin', [App\Http\Controllers\EnginController::class, 'store']);
Route::put('edit-engin/{id_engin}', [App\Http\Controllers\EnginController::class, 'update']);
Route::post('delete-engin/{id_engin}', [App\Http\Controllers\EnginController::class, 'destroy']);

Route::post('add-chambre', [App\Http\Controllers\ChambreController::class, 'store']);
Route::put('edit-chambre/{id_chambre}', [App\Http\Controllers\ChambreController::class, 'update']);
Route::post('delete-chambre/{id_chambre}', [App\Http\Controllers\ChambreController::class, 'destroy']);

Route::get('planning', [App\Http\Controllers\PlanningController::class, 'index']);
Route::post('add-plan', [App\Http\Controllers\PlanningController::class, 'store']);
Route::put('edit-plan/{id_plan}', [App\Http\Controllers\PlanningController::class, 'update']);
Route::post('delete-plan/{id_plan}', [App\Http\Controllers\PlanningController::class, 'destroy']);

Route::get('analyses', [App\Http\Controllers\AnalyseController::class, 'index']);
Route::post('analyser', [App\Http\Controllers\AnalyseController::class, 'analyser']);

Route::get('audits', [App\Http\Controllers\AuditController::class, 'getAudits']);
Route::post('start-audit', [App\Http\Controllers\AuditController::class, 'createAudit']);
Route::post('start', [App\Http\Controllers\AuditController::class, 'startAudit']);
Route::post('store-audit', [App\Http\Controllers\AuditController::class, 'storeAudit']);
Route::post('stop', [App\Http\Controllers\AuditController::class, 'stoptAudit']);

Route::post('add-auditeur', [App\Http\Controllers\AuditeurController::class, 'store']);
