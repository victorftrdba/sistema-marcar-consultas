<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogoutController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::post('/novo-medico', [DashboardController::class, 'storeDoctor'])->name('admin.storeDoctor');
    Route::post('/novo-paciente', [DashboardController::class, 'storePatient'])->name('admin.storePatient');
    Route::post('/nova-especialidade', [DashboardController::class, 'storeSpecialty'])->name('admin.storeSpecialty');

    Route::post('/logout', [LogoutController::class, 'logout'])->name('admin.logout');
});