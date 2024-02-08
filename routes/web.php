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

Route::get('/', [PagesControler::class, 'home'])->name('home');
Route::get('news', [PagesControler::class, 'news'])->name('news');
Route::get('results', [PagesControler::class, 'results'])->name('results');
Route::get('contact', [PagesControler::class, 'contact'])->name('contact');
Route::get('about', [PagesControler::class, 'about'])->name('about');
Route::get('9fa5fb587{newsData}0e215cb', [PagesControler::class, 'oneNews'])->name('newsData');
Route::get('9fa5fb587{result}0f215cb', [PagesControler::class, 'viewResult'])->name('result');
Route::post('message-processor', [MessageController::class, 'message'])->name('message');
Route::get(
    '/login',
    function () {
        return route('filament.admin.pages.dashboard');
    }
)->name('login');
