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
         $this->middleware('permission:ver-centro|crear-centro|editar-centro|borrar-centro', ['only' => ['index','btn','api']]);
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
         //$centro = centro::all();
         return view('centros_vcp.index'); //->with('centro', $centro);
      
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
       
        return view('centros_vcp.crear');
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
            'centro' => 'required',
        ]);
        $centro=new centro();
        $centro->codigo = $request->get('codigo');
        $centro->centro = $request->get('centro');
        $centro->geolon = $request->get('geolon');
        $centro->geolat = $request->get('geolat');
        $centro->despacho = $request->get('despacho');
        $centro->recepcion = $request->get('recepcion');
        $centro->provincia = $request->get('provincia');
        $centro->distrito = $request->get('distrito');
        $centro->corregimiento = $request->get('corregimiento');
        $centro->circuito = $request->get('circuito');
        $centro->codigo_corregimiento = $request->get('codigo_corregimiento');
        $centro->borrado = $request->get('borrado');
        $centro->save();
    
        return redirect()->route('centros_vcp.index');
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
         $centro = centro::find($id);
         // retornamos la vista con los datos 
        
         return view('centros_vcp.show')->with('centro', $centro);
         // with() nos permite pasar variables a la vista
         // el primer parámetros es el nombre con el que estará disponible en la vista
         // el segundo son los datos. 
        
        
        //$centro = $centro;
        //$cent = centro::all();
        //return view('centros_vcp.show', compact('cent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $centro = centro::find($id);
        return view('centros_vcp.editar')->with('centro', $centro);
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
     
        
        $centro = centro::find($id);
        
        $centro->centro = $request->get('centro');
        $centro->geolon = $request->get('geolon');
        $centro->geolat = $request->get('geolat');
        $centro->despacho = $request->get('despacho');
        $centro->recepcion = $request->get('recepcion');
        $centro->provincia = $request->get('provincia');
        $centro->distrito = $request->get('distrito');
        $centro->corregimiento = $request->get('corregimiento');
        $centro->circuito = $request->get('circuito');
        $centro->codigo_corregimiento = $request->get('codigo_corregimiento');
        $centro->borrado = $request->get('borrado');
        $centro->save();
    
        return redirect()->route('centros_vcp.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $centro = centro::find($id);
        $centro->delete();
        //return redirect()->route('/centros_vcp');
    }
}
