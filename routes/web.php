<?php

use Illuminate\Support\Facades\Route;
//agregamos para spatie los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\centros_vcpController;
use App\Http\Controllers\condiciones_especiales_vcpController;
use App\Http\Controllers\cronicos_vcpController;
use App\Http\Controllers\enfermeras_vcpController;
use App\Http\Controllers\vacunas_vcpController;
use App\Http\Controllers\vacunados_vcpController;


/* 
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
    return view('adminlte::auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\homeController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\searchController::class, 'index'])->name('search');
Route::post('/search', [App\Http\Controllers\searchController::class, 'edit'])->name('postsearch');
//Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios');
Route::get('datatable/centros', [App\Http\Controllers\datatablecentroController::class, 'index'])->name('datatable.centro');

//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('profiles', ProfileController::class);
    Route::resource('centros_vcp', centros_vcpController::class);
    Route::resource('condiciones_especiales_vcp', condiciones_especiales_vcpController::class);
    Route::resource('cronicos_vcp', cronicos_vcpController::class);
    Route::resource('enfermeras_vcp', enfermeras_vcpController::class);
    Route::resource('vacunas_vcp', vacunas_vcpController::class);
    Route::resource('vacunados_vcp', vacunados_vcpController::class);
});
