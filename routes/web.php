<?php

use App\Http\Controllers\Guest\PageController as GuestPageController;
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

Route::get('/', [GuestPageController::class, 'home'])->name("guest.home");
Route::get('/Movie', [GuestPageController::class, 'Movie'])->name("guest.movie");
Route::get('/Anime', [GuestPageController::class, 'Anime'])->name("guest.anime");
