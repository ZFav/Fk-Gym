<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymController;

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

Route::get('/', [GymController::class, 'pagina0'])->name('homepage');
Route::get('/structur', [GymController::class, 'pagina1'])->name('structur');
Route::get('/maps', [GymController::class, 'pagina2'])->name('mapp');
Route::get('/courses',[GymController::class, 'pagina3'])->name('corses');
Route::get('/detail/{id}', [GymController::class, 'paginaDetail'])->name('dettagli');
Route::get('/forms', [GymController::class, 'paginaForm'])->name('forms');