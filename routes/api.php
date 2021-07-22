<?php

use App\Http\Controllers\CrudBooksAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('store', [CrudBooksAPI::class, 'store'])->name('insertBooks');
Route::get('show', [CrudBooksAPI::class, 'show'])->name('listBooks');
Route::post('showC', [CrudBooksAPI::class, 'showC'])->name('consultBooks');
Route::post('update', [CrudBooksAPI::class, 'update'])->name('updateBooks');