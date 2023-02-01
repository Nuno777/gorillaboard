<?php

use App\Http\Controllers\Sobre_textoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\sobreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AtletasController;
use App\Http\Controllers\desportos_ImgController;
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

Route::get('/profile-test', function () {
    return view('profile.test.profile');
})->name('test');
Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/sobre', [PageController::class, 'sobre'])->name('sobre');


Route::get('/aula/{desporto}', [PageController::class, 'aula'])->name('aula');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('/aula/{desporto}', [AulaController::class, 'store'])->name('aula.store');
});

Route::get('/PerguntasFrequentes', [PageController::class, 'faqs'])->name('faqs');

Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');
Route::post('/contactos', [ContactosController::class, 'store'])->name('contactos.store');

//  Route Admin Faqs
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'verified', 'admin']], function () {
    Route::resource('faqs', FaqController::class);
    Route::resource('atletas', AtletasController::class);
    Route::resource('Img_Dashboard', desportos_ImgController::class);
    //Route::get('verimagemxpto', [desportos_ImgController::class, 'verimagemxpto'])->name('verimagemxpto');
    Route::resource('sobre', sobreController::class);
    Route::resource('user', UserController::class);

    Route::get('sobre_texto', [Sobre_textoController::class, 'index'])->name('sobre_texto.index');
    Route::get('sobre_texto/{id}/edit', [Sobre_textoController::class, 'edit'])->name('sobre_texto.edit');
    Route::put('sobre_texto/{id}/edit', [Sobre_textoController::class, 'update'])->name('sobre_texto.update');
});
Route::get('Search', [FaqController::class, 'search'])->middleware('auth', 'verified',)->name('btnSearch');
// End route Admin Faqs

Route::get('/desportos', [PageController::class, 'desportos'])->name('desportos');


Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/logs', [PageController::class, 'logs'])->name('logs');

    Route::get('/admincontactos', [ContactosController::class, 'index'])->name('admincontactos');
    Route::get('/admincontactosShow/{contacto}', [ContactosController::class, 'show'])->name('adminContactosMenssagem');
    Route::get('/admincontactosResponder/{contacto}/responder', [ContactosController::class, 'responder'])->name('adminContactosResponder');
    Route::post('/admincontactosUpdate/{contacto}', [ContactosController::class, 'enviarEmail'])->name('adminContactos.enviarEmail');
    Route::delete('/admincontactosDestroy/{contacto}', [ContactosController::class, 'destroy'])->name('adminContactos.destroy');

    Route::get('/presenca/show/all', [AulaController::class, 'show'])->name('presenca.show');
    Route::get('/presenca/show/surf', [AulaController::class, 'showSurf'])->name('presenca.showSurf');
    Route::get('/presenca/show/skate', [AulaController::class, 'showSkate'])->name('presenca.showSkate');
    Route::get('/presenca/show/bodyboard', [AulaController::class, 'showBodyboard'])->name('presenca.showBodyboard');
    Route::get('/presenca/show/downhill', [AulaController::class, 'showDownhill'])->name('presenca.showDownhill');
    Route::get('/presenca/show/paddle', [AulaController::class, 'showPaddle'])->name('presenca.showPaddle');
    Route::get('/presenca/{userDesporto}/edit', [AulaController::class, 'edit'])->name('presenca.edit');
    Route::post('/presenca/{id}/increment', [AulaController::class, 'increment'])->name('presenca.inc');
    Route::put('/presenca/{userDesporto}', [AulaController::class, 'update'])->name('presenca.update');
    Route::delete('/presenca/{userDesporto}', [AulaController::class, 'destroy'])->name('presenca.delete');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('profile', ProfileController::class);
    //GET: index
    //GET show = profile/**** */
    //GET create
    //POST store
    //GET edit = profile/ID/edit
    //PUT update = ID
    //DELETE destroy
    Route::put('profile/edit/image', [ProfileController::class, 'updateimg'])->name('profile.updateimg');
    // Route::get('profile/edit/email', [profileController::class, 'changeEmail'])->name('profile.updateEmail');
    // Route::get('profile/edit/password', [profileController::class, 'changePassword'])->name('profile.updatePasswowrd');
    // Route::get('profile/edit/image', [profileController::class, 'changeImg'])->name('profile.updateimg');
      // Route::get('profile/delete/account', [profileController::class, 'deleteAccount'])->name('profile.delete-account');
    Route::get('profile/show/add/Atleta', [profileController::class, 'addAtleta'])->name('profile.show.add-atleta');

    Route::post('profile/add/atleta', [profileController::class, 'atletaStore'])->name('profile.add-atleta');
});

require __DIR__ . '/auth.php';
