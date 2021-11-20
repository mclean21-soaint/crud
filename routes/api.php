<?php
//seagrego 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\centro;
use App\Models\condicion_especial;
use App\Models\cronico;
use App\Models\enfermera;
use App\Models\vacuna;
use App\Models\vacunado;
//se agrgos spatie
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/*

   function __construct()
    {
         $this->middleware('permission:ver-centro|crear-centro|editar-centro|borrar-centro', ['only' => ['index','centros_vcp.btn', 'centros_vcp']]);
         $this->middleware('permission:crear-centro', ['only' => ['create','store']]);
         $this->middleware('permission:editar-centro', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-centro', ['only' => ['destroy']]);
    }

*/
    
    //Route::group(['middleware' => ['auth']], function() {
Route::get('centros_vcp', function () {
  
   return datatables()
   ->Eloquent(centro::query())
   ->addIndexColumn()
   ->addColumn('action', 'centros_vcp.btn')
   ->rawColumns(['action'])    
   ->toJson();

});

Route::get('condiciones_especiales_vcp', function () {
  
   return datatables()
   ->Eloquent(condicion_especial::query())
   ->addIndexColumn()
   ->addColumn('action', 'condiciones_especiales_vcp.btn')
   ->rawColumns(['action'])    
   ->toJson();

});

Route::get('cronicos_vcp', function () {
  
   return datatables()
   ->Eloquent(cronico::query())
   ->addIndexColumn()
   ->addColumn('action', 'cronicos_vcp.btn')
   ->rawColumns(['action'])    
   ->toJson();

});

Route::get('enfermeras_vcp', function () {
  
   return datatables()
   ->Eloquent(enfermera::query())
   ->addIndexColumn()
   ->addColumn('action', 'enfermeras_vcp.btn')
   ->rawColumns(['action'])    
   ->toJson();

});

Route::get('vacunas_vcp', function () {
  
   return datatables()
   ->Eloquent(vacuna::query())
   ->addIndexColumn()
   ->addColumn('action', 'vacunas_vcp.btn')
   ->rawColumns(['action'])    
   ->toJson();

});

Route::get('vacunados_vcp', function () {
  
   return datatables()
   ->Eloquent(vacunado::query())
   ->addIndexColumn()
   ->addColumn('action', 'vacunados_vcp.btn')
   ->rawColumns(['action'])    
   ->toJson();

});
//});
