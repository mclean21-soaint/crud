<?php

namespace App\Http\Controllers;
//se agrega para acceso  a los datos que trae centro model
use App\Models\centro;
use Illuminate\Http\Request;

class datatablecentroController extends Controller
{
    public function index()
    {
         
         
         return datatables()->of(centro::all())
         ->editcolumn('created_at',function(centro $centro){
         return $centro->created_at->diffForHumans();
         })
        
         ->addcolumn('btn','centros_vcp.datatable.btn')
         ->rawcolumns(['btn'])
         ->toJson();
         
          //$centros = centro::select('id','codigo','centro')->get();
         //return datatables()->of(centro::all())
         //->addcolumn('show','<a href="#">'.('<i class="fa fa-sm fa-fw fa-edit"></i>').'</a>')
         //->rawcolumns(['show','edit','delete'])
         //->rawcolumns(['show','edit','delete'])
        // return datatables()->of($centros)->toJson();
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() 
            //return view('centros_vcp.index');    
    }
}
