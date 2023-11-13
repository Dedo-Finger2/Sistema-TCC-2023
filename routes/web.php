<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\AutenticacaoController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/aviso', function () {
    return view('Usuario.aviso');
});

Route::get('/cadastro', function () {
    return view('Usuario.cadastro');
});

Route::get('/rotas', function () {
    return view('Usuario.rotas');
});

Route::get('/feedback', function () {
    return view('Usuario.feedback');
});

Route::get('/busca', function () {
    return view('Usuario.busca');
});

Route::get('/admin', function () {
    return view('Empresa.painelControle');
});


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
Route::get('/cadastro', [AutenticacaoController::class,'createUser'])->name('create');
Route::post('/cadastro', [AutenticacaoController::class,'registerUser'])->name('registerUser');
Route::get('/aviso', [AutenticacaoController::class,'aviso'])->name('aviso');
Route::get('/login', [AutenticacaoController::class,'login'])->name('login');
Route::post('/login', [AutenticacaoController::class,'storeLogin'])->name('storeLogin');
Route::post('/logout', [AutenticacaoController::class,'logout'])->name('logout');

// Rotas
Route::get('/buscar', [BuscaController::class,'index'])->name('busca');
Route::post('/buscar', [BuscaController::class,'search'])->name('busca.buscar');
Route::get('/rotas', [BuscaController::class, 'rotas'])->name('rotas');
