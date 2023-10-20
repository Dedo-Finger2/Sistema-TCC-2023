<?php

use App\Http\Controllers\TestingController;
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

Route::get('/users', [TestingController::class, 'getUsers']);

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
