<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ManagementController;
Route::get('/', [ManagementController::class, 'stamp']);
Route::post('/stamp/login', [ManagementController::class, 'login']);
Route::post('/Managements', [ManagementController::class, 'store']);

use App\Http\Controllers\RegisteredUserController;
Route::get('/register', [RegisteredUserController::class, 'register']);
Route::post('/register/login', [RegisteredUserController::class, 'login']);
Route::post('/registers', [RegisteredUserController::class, 'store']);



















use App\Http\Controllers\DailylogController;
Route::get('/Dailylog', [DailylogController::class, 'index']);
use App\Http\Controllers\AuthenticatedController;
Route::middleware('Management')->group(function () {
     Route::get('/', [ManagementController::class, 'stamp']);
 });
use App\Http\Controllers\loginController;
Route::get('/add', [ManagementController::class, 'add']);
Route::post('/add', [ManagementController::class, 'create']);
Route::get('/edit', [ManagementController::class, 'edit']);
Route::post('/edit', [ManagementController::class, 'update']);




Route::post('/Managements/login', [ManagementController::class, 'login']);
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


