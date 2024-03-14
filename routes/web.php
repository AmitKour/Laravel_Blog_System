<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
Route::get('/dropdown',[DashboardController::class,'index'])->name('shared.create');
Route::post('/createblog',[DashboardController::class,'index'])->name('dash');


Route::group(['prefix' => 'blogs'], function () {
    Route::post('/blog', [BlogController::class, 'store'])->name('blogs.create');
    Route::get('/listblogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::patch('/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    Route::get('/public', [BlogController::class, 'indexPublic'])->name('blogs.public');
    Route::get('/about', [BlogController::class, 'about'])->name('blogs.about');
    Route::get('/contact', [BlogController::class, 'contact'])->name('blogs.contact');
    Route::get('/{blog}', [BlogController::class, 'show'])->name('blogs.show');
});


