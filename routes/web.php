<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OmikujiController;
use App\Http\Controllers\RecipeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/omikuji', [OmikujiController::class, 'index']);
Route::post('/omikuji', [OmikujiController::class, 'omikuji']);
Route::get('/recipe', [RecipeController::class, 'index']);
Route::post('/recipe', [RecipeController::class, 'recipe']);