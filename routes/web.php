<?php

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

Route::get('/', function () {
    return view('home', ['adventures' => Adventure::with('images')->latest()->take(6)->get()]);
});

Route::get('/adventures', function () {
    return view('adventures', ['adventures' => Adventure::with('images', 'destination')->get()]);
});

Route::get('/adventures/{id}', function ($id) {
    return view('adventure', ['adventure' => Adventure::find($id)]);
});

Route::get('/stats', function () {
    return view('stats');
});

Route::get('/about', function () {
    return view('about');
});
