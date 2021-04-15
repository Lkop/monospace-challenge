<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VoyagesController;
use App\Models\Voyage;

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

Route::get('/', function() {
    return ['message' => 'Hello World'];
});

Route::get('voyages', [VoyagesController::class, 'displayAll']);

Route::post('voyages', [VoyagesController::class, 'createVoyage']);

Route::put('voyages/{voyage-id}', [VoyagesController::class, 'updateVoyage']);
