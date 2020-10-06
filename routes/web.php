<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PostsController;
use Inertia\Inertia;

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
    return Inertia::render('Dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/articles', [ArticlesController::class, 'index'])->name('articles');


// Route::get("/articles", [ArticlesController::class, 'index']);
// Route::post("/articles", [ArticlesController::class, 'store']);
// Route::get("/articles/create", [ArticlesController::class, 'create']);
// Route::get("/articles/{article}", [ArticlesController::class, 'show']); // Should go last, as its a wild card pattern matcher.






