<?php

use App\Http\Controllers\MessageController;
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

Route::get('/',[MessageController::class,"index"])->name('message.home');

Route::get('/crud',[MessageController::class,"create"])->name('message.create');

Route::post('/messages/store',[MessageController::class,"store"])->name('message.store');

Route::get('/messages/{id}/edit',[MessageController::class,"edit"])->name('message.edit');

Route::put('/messages/{message}/edit',[MessageController::class,"update"])->name('message.update');

Route::delete('/messages/{message}/delete',[MessageController::class,"destroy"])->name('messages.delete');


require __DIR__ . '/auth.php';
