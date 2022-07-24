<?php

use App\Http\Controllers\UplaodController;
use Illuminate\Support\Facades\Route;
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
Route::get('/file', function () {
    return view('File');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/file-upload', [App\Http\Controllers\UplaodController::class, 'uplaod'])->name('file-uplaod');

Route::get('/download-file', [App\Http\Controllers\UplaodController::class, 'downlaod'])->name('download-file');
// Route::get('/file-downlaod', [App\Http\Controllers\UplaodController::class, 'downlaod'])->name('file-downlaod');
