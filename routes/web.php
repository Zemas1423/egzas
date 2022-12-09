<?php

use App\Http\Controllers\Products;
use App\Http\Controllers\ProfileController;
use App\Models\Products as ModelsProducts;
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

Route::get('/', function () {
    $products = ModelsProducts::all();

    return view('dashboard', ['products' => $products]);
})->name('dashboard');

Route::get('/sport', function () {
    return view('sport');
});

Route::get('/classic', function () {
    return view('classic');
});

Route::get('/fun', function () {
    return view('fun');
});

Route::post('/create', [Products::class, 'create']);
Route::post('/update/{id}', [Products::class, 'edit']);
Route::post('/delete/{id}', [Products::class, 'delete']);

Route::get('/add', function () {
    return view('add');
});

Route::get('/update/{id}', function ($id) {
    $product = ModelsProducts::find($id);

    return view('update', ['product' => $product]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
