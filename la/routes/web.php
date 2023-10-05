<?php

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

// コントーラ
use App\Http\Controllers\HtmlMkController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/html_mk/', [HtmlMkController::class, 'index']);
