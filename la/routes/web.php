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
use App\Http\Controllers\HtmlPageEditController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/html_mk/', [HtmlMkController::class, 'index']);

Route::get('/html_edit_index/', [HtmlPageEditController::class, 'index']);

Route::get('/html_edit_editor/', [HtmlPageEditController::class, 'edit']);

Route::post('/html_edit_update_exec/', [HtmlPageEditController::class, 'update_exec']);
