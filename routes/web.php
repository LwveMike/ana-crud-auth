<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetsController;

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

Route::get('/', [TweetsController::class, 'index'])->middleware(['auth'])->name('home');

Route::get('/add', [TweetsController::class, 'addTweet'])->middleware(['auth'])->name('add-article');

Route::post('/store-tweet', [TweetsController::class, 'store'])->middleware(['auth']);

Route::get('/delete-tweet/{id}', [TweetsController::class, 'destroy'])->middleware(['auth']);

Route::get('/update-tweet/{id}', [TweetsController::class, 'getUpdate'])->middleware(['auth']);

Route::post('/update-tweet/{id}', [TweetsController::class, 'update'])->middleware(['auth']);



require __DIR__.'/auth.php';
