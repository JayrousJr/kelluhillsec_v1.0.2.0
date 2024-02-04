<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesControler;
use App\Http\Controllers\MessageController;

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
Route::get('/', [PagesControler::class,'home'])->name('home');
Route::get('news', [PagesControler::class,'news'])->name('news');
Route::get('contact', [PagesControler::class,'contact'])->name('contact');
Route::get('about', [PagesControler::class,'about'])->name('about');
Route::post('message-processor',[MessageController::class,'message'])->name('message');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});