<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCreateController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PictureController;

/*php artisan route:clear

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';

Route::get('/addblog',[BlogController::class,'index'])->name('dash');
Route::post('/blog',[BlogCreateController::class,'store'])->name('blogs.create');
Route::get('/listblogs', [BlogCreateController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}/edit', [BlogCreateController::class, 'edit'])->name('blogs.edit');
Route::put('/blogs/{id}', [BlogCreateController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{id}', [BlogCreateController::class, 'destroy'])->name('blogs.destroy');

