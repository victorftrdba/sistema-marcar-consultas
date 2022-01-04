<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\PatientController;

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

// Rotas para Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function() {
    // Rotas de Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::post('/novo-medico', [DashboardController::class, 'storeDoctor'])->name('admin.storeDoctor');
    Route::post('/novo-paciente', [DashboardController::class, 'storePatient'])->name('admin.storePatient');
    Route::post('/nova-especialidade', [DashboardController::class, 'storeSpecialty'])->name('admin.storeSpecialty');

    // Rotas de Busca com Ajax
    Route::get('/searchSpecialty', [DashboardController::class, 'searchSpecialty'])->name('admin.searchSpecialty');
    Route::get('/searchDoctor', [PatientController::class, 'searchDoctor'])->name('admin.searchDoctor');

    // Rotas de Pacientes
    Route::get('/pacientes', [PatientController::class, 'index'])->name('admin.patients.index');
    Route::get('/pacientes/nova-consulta/{id}', [PatientController::class, 'appointment'])->name('admin.patients.appointment');
    Route::post('/pacientes/criar-consulta/{id}', [PatientController::class, 'storeAppointment'])->name('admin.patients.storeAppointment');

    // Rota de Logout
    Route::post('/logout', [LogoutController::class, 'logout'])->name('admin.logout');
});