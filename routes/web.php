<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactosController;
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

// Route::group(['prefix'=>'admin', 'as'=>'admin.'], function () {
//     Route::resource('faqs', FaqController::class);
// });


Route::get('/adminfaqs', [FaqController::class,'index'])->middleware(['auth', 'verified'])->name('adminfaqs');
Route::get('/adminfaqscreate', [FaqController::class,'create'])->middleware(['auth', 'verified'])->name('adminFaqsCreate');
Route::get('/adminfaqsedit', [FaqController::class,'edit'])->middleware(['auth', 'verified'])->name('adminFaqsEdit');
Route::get('/adminfaqsstore', [FaqController::class,'store'])->middleware(['auth', 'verified'])->name('adminFaqsStore');
Route::get('/adminfaqsShow', [FaqController::class,'show'])->middleware(['auth', 'verified'])->name('adminFaqsShow');
Route::get('/adminfaqsdestroy', [FaqController::class,'destroy'])->middleware(['auth', 'verified'])->name('adminFaqsDestroy');


Route::get('/admincontactos', [ContactosController::class,'index'])->name('admincontactos');
Route::get('/admincontactosShow', [ContactosController::class,'show'])->name('adminPage.adminContactos.show');
Route::get('/admincontactosDestroy', [ContactosController::class,'destroy'])->name('adminPage.adminContactos.destroy');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
