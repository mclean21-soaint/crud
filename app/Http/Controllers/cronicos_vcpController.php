<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//se agrega para acceso  a los datos que trae centro model
use App\Models\cronico;
//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;



class cronicos_vcpController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-cronico|crear-cronico|editar-cronico|borrar-cronico', ['only' => ['index','btn','api']]);
         $this->middleware('permission:crear-cronico', ['only' => ['create','store']]);
         $this->middleware('permission:editar-cronico', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-cronico', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //Con paginación
         //$cronico = centro::all();
         return view('cronicos_vcp.index'); //->with('centro', $centro);
      
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() 
            //return view('cronicos_vcp.index');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('cronicos_vcp.crear');
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
        $cronico=new cronico();
        $cronico->nombre = $request->get('nombre');
        $cronico->codigo = $request->get('codigo');
       
        $cronico->save();
    
        return redirect()->route('cronicos_vcp.index');
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
         $cronico = cronico::find($id);
         // retornamos la vista con los datos 
        
         return view('cronicos_vcp.show')->with('cronico', $cronico);
         // with() nos permite pasar variables a la vista
         // el primer parámetros es el nombre con el que estará disponible en la vista
         // el segundo son los datos. 
        
        
        //$cronico = $centro;
        //$cent = centro::all();
        //return view('cronicos_vcp.show', compact('cent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cronico = cronico::find($id);
        return view('cronicos_vcp.editar')->with('cronico', $cronico);
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
     
        
        $cronico = cronico::find($id);
        
        $cronico->nombre = $request->get('nombre');
        $cronico->codigo = $request->get('codigo');
        
        $cronico->save();
    
        return redirect()->route('cronicos_vcp.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cronico = cronico::find($id);
        $cronico->delete();
        //return redirect()->route('/centros_vcp');
    }
}
