<?php

use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\CervejaController;
use Illuminate\Support\Facades\Auth;
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

Route::any('/', [CervejaController::class, 'index'])->name('cervejaria.index');

Route::any('/cadastra', [CervejaController::class, 'cadastra'])->name('cervejaria.cadastra');

Route::post('/', [CervejaController::class, 'store'])->name('cervejaria.store');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{id}', [CervejaController::class, 'show'])->name('cervejaria.show');

Route::get('/edit/{id}', [CervejaController::class, 'edit'])->name('cervejaria.edit');

Route::put('/update/{id}', [CervejaController::class, 'update'])->name('cervejaria.update');

Route::delete('/delete/{id}', [CervejaController::class, 'destroy'])->name('cervejaria.destroy');