<?php

use App\Http\Controllers\AdventureController;
use App\Models\Adventure;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AdventureController::class, 'popular']);

Route::get('/adventures', [AdventureController::class, 'index']);

Route::get('/adventures/{adventure}', [AdventureController::class, 'show']);

Route::get('/stats', [AdventureController::class, 'stats']);

Route::get('/about', function () {
    return view('about');
});
