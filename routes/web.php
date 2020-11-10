<?php

use App\Http\Controllers\NotaController;
use App\Models\Nota;
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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('notas/create',[NotaController::class , 'create'])->name('notas.create');
Route::post('notas',[NotaController::class , 'store'])->name('notas.store');

Route::get('notas/index',[NotaController::class , 'index'])->name('notas.index');
Route::get('notas/ver',[NotaController::class , 'ver'])->name('notas.ver');