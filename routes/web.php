<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AdminController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', function () {
    return view('Product');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/admin/products',[AdminController::class, 'ProductsRender']);
Route::post('/admin/products',[AdminController::class, 'StoreProducts']);
Route::get('/delete/product/{id}',[AdminController::class,'DeleteProduct']);
Route::get('/update/product/{id}',[AdminController::class,'UpdateProduct']);
Route::put('/update/product/{id}',[AdminController::class,'UpdateProductForm']);
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
Route::get('admin/categories',[AdminController::class,'CategorieRender']);
Route::post('admin/categories',[AdminController::class,'StoreCategorie']);
Route::get('/update/categorie/{id}',[AdminController::class,'UpdateCategorie']);
Route::put('/update/categorie/{id}',[AdminController::class,'UpdateCategorieForm']);
Route::get('/delete/categorie/{id}',[AdminController::class,'DeleteCategorie']);

Route::get('/home',[ProduitController::class,'ProductsHomeRender']);
Route::get('/item/{id}',[ProduitController::class,'ProductDetailsRead']);
// Route::get('/admin/categorie',[AdminController::class,''])
require __DIR__.'/auth.php';
