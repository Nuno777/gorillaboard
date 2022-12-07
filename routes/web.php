<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FaqController;
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

Route::get('/', [PageController::class,'index'])->name('index');

Route::get('/sobre', [PageController::class,'sobre'])->name('sobre');

Route::get('/aula', [PageController::class,'aula'])->name('aula');

Route::get('/PerguntasFrequentes', [PageController::class,'faqs'])->name('faqs');

Route::get('/contactos', [PageController::class,'contactos'])->name('contactos');

Route::get('/dashboard', [PageController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function () {
    Route::resource('faqs', FaqController::class);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
