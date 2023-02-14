<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MagazynController;
use App\Http\Controllers\ArtykułController;
use App\Http\Controllers\PrzyjęcieartykułuController;
use App\Http\Controllers\WydanieController;
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
    return redirect()->route('login');
});


Route::get('rejester', [RegisteredUserController::class, 'create'])
->name('rejester');
Route::post('rejester', [RegisteredUserController::class, 'store']);

# Magazyny 
Route::resource('magazyny', MagazynController::class);

#artykuł
Route::resource('artykuł',ArtykułController::class)->middleware(['auth', 'verified']);
Route::resource('Przyjęcieartykułu', PrzyjęcieartykułuController::class)->middleware(['auth', 'verified']);

#Wydanie
Route::resource('Wydanie', WydanieController::class)->middleware(['auth', 'verified']);

#admin panel
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
