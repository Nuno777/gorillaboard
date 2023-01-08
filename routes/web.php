<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\sobreController;
use App\Http\Controllers\AtletasController;
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
Route::middleware(['auth','verified'])->group(function () {
    Route::post('/aula/{desporto}', [AulaController::class, 'store'])->name('aula.store');
});

Route::get('/PerguntasFrequentes', [PageController::class, 'faqs'])->name('faqs');

Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');
Route::post('/contactos', [ContactosController::class, 'store'])->name('contactos.store');

//  Route Admin Faqs
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'verified', 'admin']], function () {
    Route::resource('faqs', FaqController::class);
    Route::resource('atletas', AtletasController::class);
});
// End route Admin Faqs


Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    Route::get('/profileAdmin', [ProfileAdminController::class, 'show'])->name('profileAdmin.show');
    Route::patch('/profileAdmin', [ProfileAdminController::class, 'edit'])->name('profileAdmin.edit');
    Route::delete('/profileAdmin', [ProfileAdminController::class, 'destroy'])->name('profileAdmin.destroy');

    Route::get('/admincontactos', [ContactosController::class, 'index'])->name('admincontactos');
    Route::get('/admincontactosShow/{contacto}', [ContactosController::class, 'show'])->name('adminContactosMenssagem');
    Route::get('/admincontactosEdit/{contacto}/edit', [ContactosController::class, 'edit'])->name('adminContactosEdit');
    Route::put('/admincontactosUpdate/{contacto}', [ContactosController::class, 'update'])->name('adminContactos.update');
    Route::delete('/admincontactosDestroy/{contacto}', [ContactosController::class, 'destroy'])->name('adminContactos.destroy');

    Route::get('/presenca/show', [AulaController::class, 'show'])->name('presenca.show');
    Route::get('/presenca/{userDesporto}/edit', [AulaController::class, 'edit'])->name('presenca.edit');
    Route::put('/presenca/{userDesporto}', [AulaController::class, 'update'])->name('presenca.update');
    Route::delete('/presenca/{userDesporto}', [AulaController::class, 'destroy'])->name('presenca.delete');

});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('profile', ProfileController::class);
});

require __DIR__ . '/auth.php';
