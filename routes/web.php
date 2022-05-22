<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputeController;
use App\Http\Controllers\TokenController;

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

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/application', function () {
    return view('application');
})->middleware(['auth'])->name('application');

Route::post('application', [ComputeController::class, 'store']);

Route::get('/animation', function () {
    return view('animation');
})->middleware(['auth'])->name('animation');

Route::get('/token', [TokenController::class, 'index'])->middleware(['auth'])->name('token');
Route::post('token', [TokenController::class, 'generateToken'])->middleware(['auth'])->name('generateTokens');

Route::get('/instructions', function () {
    return view('instructions');
})->middleware(['auth'])->name('instructions');




require __DIR__ . '/auth.php';
