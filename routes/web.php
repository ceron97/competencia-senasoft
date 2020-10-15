<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmpresasController;


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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/index', [UsuariosController::class, 'index'])->name('usuarios');

Route::get('/producto', [ProductoController::class, 'index'])->name('productos');

Route::get('/solicitar', function () {
    return view('solicitar');
})->name('solicitar');

Route::get('/adicionar', function () {
    return view('adicionar');
})->name('adicionar');

Route::get('/sucursales', [SucursalesController::class, 'index'])->name('sucursales');

Route::get('/admin/index_admin', [AdminController::class, 'index'])->name('index.admin');

Route::get('/admin/usuarios', [AdminController::class, 'usuarios'])->name('usuarios.admin');

Route::get('/empresa/usuarios', [EmpresasController::class, 'usuarios'])->name('usuarios.empresa');