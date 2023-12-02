<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GraphHandlerController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Auth
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'store'])->name('auth');

// User
Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('sharedAuth');
Route::get('/alert', [UserController::class, 'alert'])->name('users.alert')->middleware('sharedAuth');
Route::get('/registerUser', [UserController::class, 'create'])->name('users.create');
Route::post('/registerUser', [UserController::class, 'store'])->name('users.store');

// Feedback
Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create')->middleware('sharedAuth');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store')->middleware('sharedAuth');

// Companies
Route::get('/company-home', [CompanyController::class, 'index'])->name('companies.home')->middleware('admin');
Route::get('/dashboard', [CompanyController::class, 'dashboard'])->name('companies.dashboard')->middleware('admin');
Route::get('/registerCompany', [CompanyController::class, 'create'])->name('companies.create');
Route::post('/registerCompany', [CompanyController::class, 'store'])->name('companies.store');

Route::get('/dashboard2', [GraphHandlerController::class, 'index'])->name('companies.dashboard2');

// Routes
Route::get('/search', [RouteController::class, 'showSearchForm'])->name('routes.showSearchForm')->middleware('sharedAuth');
Route::post('/search', [RouteController::class, 'searchRoutes'])->name('routes.searchRoutes')->middleware('sharedAuth');
Route::get('/routes', [RouteController::class, 'showRoutes'])->name('routes.showRoutes')->middleware('sharedAuth');
Route::get('/itinerary/{id}', [RouteController::class, 'viewRouteDetails'])->name('routes.view')->middleware('sharedAuth');
