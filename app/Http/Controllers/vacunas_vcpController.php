<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//se agrega para acceso  a los datos que trae centro model
use App\Models\vacuna;
//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;



class vacunas_vcpController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-vacuna|crear-vacuna|editar-vacuna|borrar-vacuna', ['only' => ['index','btn','api']]);
         $this->middleware('permission:crear-vacuna', ['only' => ['create','store']]);
         $this->middleware('permission:editar-vacuna', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-vacuna', ['only' => ['destroy']]);
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
         return view('vacunas_vcp.index'); //->with('centro', $vacuna);
      
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() 
            //return view('vacunas_vcp.index');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('vacunas_vcp.crear');
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
            'nombre' => 'required',
            'codigo' => 'required',
            'tipo' => 'required',
        ]);
        $vacuna=new vacuna();
        $vacuna->nombre = $request->get('nombre');
        $vacuna->codigo = $request->get('codigo');
        $vacuna->tipo = $request->get('tipo');

        $vacuna->save();
    
        return redirect()->route('vacunas_vcp.index');
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
         $vacuna = vacuna::find($id);
         // retornamos la vista con los datos 
        
         return view('vacunas_vcp.show')->with('vacuna', $vacuna);
         // with() nos permite pasar variables a la vista
         // el primer parámetros es el nombre con el que estará disponible en la vista
         // el segundo son los datos. 
        
        
        //$condicion_especial = $vacuna;
        //$cent = centro::all();
        //return view('vacunas_vcp.show', compact('cent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacuna = vacuna::find($id);
        return view('vacunas_vcp.editar')->with('vacuna', $vacuna);
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
     
        
        $vacuna = vacuna::find($id);
        
        $vacuna->nombre = $request->get('nombre');
        $vacuna->codigo = $request->get('codigo');
        $vacuna->tipo = $request->get('tipo');
        
        $vacuna->save();
    
        return redirect()->route('vacunas_vcp.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacuna = vacuna::find($id);
        $vacuna->delete();
        //return redirect()->route('/centros_vcp');
    }
}
