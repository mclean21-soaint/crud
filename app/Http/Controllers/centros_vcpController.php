<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//se agrega para acceso  a los datos que trae centro model
use App\Models\centro;
//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;


class centros_vcpController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-centro|crear-centro|editar-centro|borrar-centro')->only('index');
         $this->middleware('permission:crear-centro', ['only' => ['create','store']]);
         $this->middleware('permission:editar-centro', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-centro', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //Con paginación
         $centros = centro::paginate(5);
         return view('centros_vcp.index',compact('centros'));
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() 
            //return view('centros_vcp.index');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(centro $centro)
    {
        //
    }
}
