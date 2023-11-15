<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SearchController;
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
Route::get('/cadastro', [AuthController::class,'create'])->name('auth.register');
Route::post('/cadastro', [AuthController::class,'store'])->name('auth.storeRegister');
Route::get('/aviso', [AuthController::class,'alert'])->name('auth.alert');
Route::get('/login', [AuthController::class,'login'])->name('auth.login');
Route::post('/login', [AuthController::class,'storeLogin'])->name('auth.storeLogin');
Route::get('/logout', [AuthController::class,'logout'])->name('auth.logout');

// Rotas
Route::get('/busca', [SearchController::class,'index'])->name('search.index')->middleware('auth');
Route::post('/busca', [SearchController::class,'search'])->name('search.buscar');
Route::get('/rotas', [SearchController::class, 'rotas'])->name('search.rotas');
Route::get('/feedback', [SearchController::class, 'feedback'])->name('feedback.index');
Route::post('/feedback', [SearchController::class, 'storeFeedback'])->name('feedback.store');

// Admin
Route::get('/admin', [DataController::class, 'index'])->name('admin.index');
