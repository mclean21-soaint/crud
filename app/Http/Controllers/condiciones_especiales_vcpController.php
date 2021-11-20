<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//se agrega para acceso  a los datos que trae centro model
use App\Models\condicion_especial;
//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;



class condiciones_especiales_vcpController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-condicion_especial|crear-condicion_especial|editar-condicion_especial|borrar-condicion_especial', ['only' => ['index','btn','api']]);
         $this->middleware('permission:crear-condicion_especial', ['only' => ['create','store']]);
         $this->middleware('permission:editar-condicion_especial', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-condicion_especial', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //Con paginación
         //$condicion_especial = centro::all();
         return view('condiciones_especiales_vcp.index'); //->with('centro', $centro);
      
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() 
            //return view('condiciones_especiales_vcp.index');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('condiciones_especiales_vcp.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        request()->validate([
            'codigo' => 'required',
            'nombre' => 'required',
        ]);
        $condicion_especial=new condicion_especial();
        $condicion_especial->nombre = $request->get('nombre');
        $condicion_especial->codigo = $request->get('codigo');
       
        $condicion_especial->save();
    
        return redirect()->route('condiciones_especiales_vcp.index');
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
         $condicion_especial = condicion_especial::find($id);
         // retornamos la vista con los datos 
        
         return view('condiciones_especiales_vcp.show')->with('condicion_especial', $condicion_especial);
         // with() nos permite pasar variables a la vista
         // el primer parámetros es el nombre con el que estará disponible en la vista
         // el segundo son los datos. 
        
        
        //$condicion_especial = $centro;
        //$cent = centro::all();
        //return view('condiciones_especiales_vcp.show', compact('cent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $condicion_especial = condicion_especial::find($id);
        return view('condiciones_especiales_vcp.editar')->with('condicion_especial', $condicion_especial);
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
     
        
        $condicion_especial = condicion_especial::find($id);
        
        $condicion_especial->nombre = $request->get('nombre');
        $condicion_especial->codigo = $request->get('codigo');
        
        $condicion_especial->save();
    
        return redirect()->route('condiciones_especiales_vcp.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $condicion_especial = condicion_especial::find($id);
        $condicion_especial->delete();
        //return redirect()->route('/centros_vcp');
    }
}
