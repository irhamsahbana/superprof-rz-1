<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'index']);
Route::get('crud', [WebController::class, 'index']);
Route::get('list', [WebController::class, 'list']);
Route::post('store-company', [WebController::class, 'store']);
Route::post('edit-company', [WebController::class, 'edit']);
Route::post('delete-company', [WebController::class, 'destroy']);
Route::get('companies/export/', [WebController::class, 'export']);

Route::post('dropzone/upload', [WebController::class, 'import'])->name('dropzone.upload');
Route::get('dropzone/fetch', [WebController::class, 'fetch'])->name('dropzone.fetch');
Route::get('dropzone/delete', [WebController::class, 'delete'])->name('dropzone.delete');

