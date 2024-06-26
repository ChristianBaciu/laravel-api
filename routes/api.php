<?php

use App\Http\Controllers\Api\LeadController;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// http://127.0.0.1:8000/api/apiProjects
Route::get('/apiProjects', [ProjectController::class, 'index']);

// http://127.0.0.1:8000/api/apiProjects/{titolo}
//es.  http://127.0.0.1:8000/api/apiProjects/Dolorem necessitatibus voluptas et corrupti.
Route::get('/apiProjects/{titolo}', [ProjectController::class, 'show']);


// http://127.0.0.1:8000/api/contacts}
Route::post('/contacts', [LeadController::class, 'store']);

