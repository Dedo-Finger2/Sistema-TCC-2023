<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RotaController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rotasTeste', function () {
    return view('Usuario.telas finais.rotas');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/aviso', function () {
//     return view('Usuario.aviso');
// });

// Route::get('/cadastro', function () {
//     return view('Usuario.cadastro');
// });

// Route::get('/rotas', function () {
//     return view('Usuario.rotas');
// });

// Route::get('/feedback', function () {
//     return view('Usuario.feedback');
// });

// Route::get('/busca', function () {
//     return view('Usuario.busca');
// });

// Route::get('/admin', function () {
//     return view('Empresa.painelControle');
// });


/*
|--------------------------------------------------------------------------
| Rota com controlador
|--------------------------------------------------------------------------
|
| Essa rota usa um controlador ao invés de usar uma closure, possui um nome
| e tem um middleware aplicado vamos usar esse tipo de rota
| e não aquela usada acima.
|
*/
// Route::get('/', [Controller::class, 'metodo'])->name('controller.metodo')->middleware('auth');

/*
| ---------------------------
| Rotas finais
| ---------------------------
*/

// TODO: Adicionar o middleware de auth nas rotas
Route::get('/cadastro', [UsuarioController::class,'create'])->name('user.create');
Route::post('/cadastro', [UsuarioController::class,'store'])->name('user.store');
Route::get('/aviso', [UsuarioController::class,'alert'])->name('user.alert');

// Auth User
Route::get('/login', [UsuarioController::class,'login'])->name('user.login');
Route::post('/login', [UsuarioController::class,'auth'])->name('user.auth');
Route::get('/logout', [UsuarioController::class,'logout'])->name('user.logout');

// Auth Company
Route::get('/loginEmpresa', [EmpresaController::class,'login'])->name('company.login');
Route::post('/loginEmpresa', [EmpresaController::class,'auth'])->name('company.auth');
Route::get('/logoutEmpresa', [EmpresaController::class,'logout'])->name('company.logout');

// Rotas
Route::get('/busca', [RotaController::class,'showSearchForm'])->name('route.index');
Route::post('/busca', [RotaController::class,'searchRoutes'])->name('route.search');
Route::get('/rotas', [RotaController::class, 'showRoutes'])->name('route.rotas');

// Feedback
Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

// Admin
Route::get('/admin', [DataController::class, 'index'])->name('admin.index');
