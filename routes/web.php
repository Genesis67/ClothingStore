<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [pagesController::class, 'home'])->name('homePage');
Route::get('/show/{design}', [pagesController::class, 'show'])->name('showPage');
Route::get('/design', [pagesController::class, 'design'])->name('designPage');
Route::get('/about', [pagesController::class, 'about'])->name('aboutPage');
Route::get('/contact', [pagesController::class, 'contact'])->name('contactPage');

// Grouping your existing routes under the 'admin.basic' middleware
Route::middleware(['admin.basic'])->prefix('admin')->group(function () {

    Route::get('/index', [adminController::class, 'index'])->name('adminHome');
    Route::get('/create', [adminController::class, 'create'])->name('createForm');
    Route::get('/edit/{design}', [adminController::class, 'edit'])->name('editForm');
    
    Route::post('/create', [adminController::class, 'store'])->name('createDesign');
    Route::put('/edit/{design}', [adminController::class, 'update'])->name('updateDesign');
    Route::delete('/delete/{design}', [adminController::class, 'destroy'])->name('deleteDesign');

});


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';
