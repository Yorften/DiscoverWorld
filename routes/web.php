<?php

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
    return view('welcome');
});

Route::get('/adventures', function () {
    $data = [];
    return view('adventures', $data);
});

Route::get('/adventures/{$id}', function ($id) {
    $data = [];
    return view('adventure', $data);
});

Route::get('/stats', function () {
    $data = [];
    return view('stats', $data);
});
