<?php

use Illuminate\Support\Facades\Route;
//agregamos para spatie los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
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

Route::get('/search', [App\Http\Controllers\searchController::class, 'index'])->name('search');
Route::post('/search', [App\Http\Controllers\searchController::class, 'edit'])->name('postsearch');
//Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios');

//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('profiles', ProfileController::class);
        
});
