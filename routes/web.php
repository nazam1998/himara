<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/rooms', [PageController::class, 'rooms']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/team', [PageController::class, 'team']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
