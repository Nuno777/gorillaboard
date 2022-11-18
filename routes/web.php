<?php

use App\Http\Controllers\PagueController;

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


Route::get('/', [PagueController::class,'index'])->name('index');

Route::get('/sobre', [PagueController::class,'sobre'])->name('sobre');

Route::get('/aula', [PagueController::class,'aula'])->name('aula');

Route::get('/PerguntasFrequentes', [PagueController::class,'faqs'])->name('faqs');

Route::get('/contactos', [PagueController::class,'contactos'])->name('contactos');

/*
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/aula', function () {
    return view('aula');
})->name('aula');

Route::get('/PerguntasFrequentes', function () {
    return view('faqs');
})->name('faqs');
 */
