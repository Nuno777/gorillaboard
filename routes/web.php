<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\sobreController;
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

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/sobre', [sobreController::class, 'index'])->name('sobre');

Route::get('/aula/{desporto}', [PageController::class, 'aula'])->name('aula');

Route::get('/PerguntasFrequentes', [PageController::class, 'faqs'])->name('faqs');

Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');
Route::post('/contactos', [ContactosController::class, 'store'])->name('contactos.store');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'verified', 'admin']], function () {
    Route::resource('faqs', FaqController::class);
});

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');


    Route::get('/profileAdmin', [ProfileAdminController::class, 'show'])->name('profileAdmin.show');
    Route::patch('/profileAdmin', [ProfileAdminController::class, 'edit'])->name('profileAdmin.edit');
    Route::delete('/profileAdmin', [ProfileAdminController::class, 'destroy'])->name('profileAdmin.destroy');

    Route::get('/admincontactos', [ContactosController::class, 'index'])->name('admincontactos');
    Route::get('/admincontactosShow', [ContactosController::class, 'show'])->name('adminContactosMenssagem');
    Route::get('/admincontactosEdit', [ContactosController::class, 'edit'])->name('adminContactosEdit');
    Route::get('/admincontactosUpdate', [ContactosController::class, 'update'])->name('adminContactos.update');
    Route::delete('/admincontactosDestroy', [ContactosController::class, 'destroy'])->name('adminContactos.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
