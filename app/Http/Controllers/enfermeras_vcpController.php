<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//se agrega para acceso  a los datos que trae centro model
use App\Models\enfermera;
//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;



class enfermeras_vcpController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-enfermera|crear-enfermera|editar-enfermera|borrar-enfermera', ['only' => ['index','btn','api']]);
         $this->middleware('permission:crear-enfermera', ['only' => ['create','store']]);
         $this->middleware('permission:editar-enfermera', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-enfermera', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //Con paginación
         //$centro = centro::all();
         return view('enfermeras_vcp.index'); //->with('centro', $centro);
      
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() 
            //return view('enfermeras_vcp.index');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('enfermeras_vcp.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*
        request()->validate([
            'codigo' => 'required',
            'centro' => 'required',
        ]);
        */
        $enfermera=new enfermera();
        $enfermera->nombre = $request->get('nombre');
        $enfermera->usuario = $request->get('usuario');
        $enfermera->password = $request->get('password');
        $enfermera->email = $request->get('email');
        $enfermera->telefono = $request->get('telefono');
        $enfermera->estado = $request->get('estado');
       
        $enfermera->save();
    
        return redirect()->route('enfermeras_vcp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {
         // Buscamos el id en la tabla
         $enfermera = enfermera::find($id);
         // retornamos la vista con los datos 
        
         return view('enfermeras_vcp.show')->with('enfermera', $enfermera);
         // with() nos permite pasar variables a la vista
         // el primer parámetros es el nombre con el que estará disponible en la vista
         // el segundo son los datos. 
        
        
        //$centro = $centro;
        //$cent = centro::all();
        //return view('enfermeras_vcp.show', compact('cent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enfermera = enfermera::find($id);
        return view('enfermeras_vcp.editar')->with('enfermera', $enfermera);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
     
        
        $enfermera=enfermera::find($id);
        $enfermera->nombre = $request->get('nombre');
        $enfermera->usuario = $request->get('usuario');
        $enfermera->password = $request->get('password');
        $enfermera->email = $request->get('email');
        $enfermera->telefono = $request->get('telefono');
        $enfermera->estado = $request->get('estado');
       
        $enfermera->save();
    
        return redirect()->route('enfermeras_vcp.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enfermera = enfermera::find($id);
        $enfermera->delete();
        //return redirect()->route(''enfermeras_vcp');
    }
}
