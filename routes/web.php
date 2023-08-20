<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Controllers\Middleware;
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
// Route::get('/post',[HomeController::class,'post'])->name('post');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/products-view', [ProductsController::class, 'show'])->middleware('auth')->name('products-view');
Route::get('/add-product', [ProductsController::class, 'create'])->middleware('auth')->name('add-product');
Route::post('/store', [ProductsController::class, 'store'])->middleware('auth')->name('store');

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/delete-product/{id}', [ProductsController::class, 'destroy'])->name('delete-product');
    Route::get('/delete-user/{id}', [UserController::class, 'delete'])->name('delete-user');
    Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('edit-product');
    Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');
    Route::post('/update', [ProductsController::class, 'update'])->name('update');
    Route::post('/update-user', [UserController::class, 'update'])->name('update-user');
    Route::get('/view-users', [UserController::class, 'index'])->name('view-users');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';