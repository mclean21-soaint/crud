<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//se agrega para acceso  a los datos que trae centro model
use App\Models\vacunado;
use App\Models\vacuna;
use App\Models\enfermera;
use App\Models\condicion_especial;
//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;



class vacunados_vcpController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-vacunado|crear-vacunado|editar-vacunado|borrar-vacunado', ['only' => ['index','btn','api']]);
         $this->middleware('permission:crear-vacunado', ['only' => ['create','store']]);
         $this->middleware('permission:editar-vacunado', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-vacunado', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //Con paginación
         //$vacunado = centro::all();
         return view('vacunados_vcp.index'); //->with('centro', $vacunado);
      
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() 
            //return view('vacunados_vcp.index');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacuna = vacuna::all();
        $enfermera = enfermera::all();
        $condicion = condicion_especial::all();
        return view('vacunados_vcp.crear', compact('vacuna'), compact('enfermera'), compact('condicion'));

        //return view('vacunados_vcp.crear');
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
            'vac_id' => 'required',
            'fecha' => 'required',
            'cedula' => 'required',
        ]);
        $vacunado=new vacunado();
        $vacunado->vac_id= $request->get('vac_id');
        $vacunado->fecha = $request->get('fecha');
        $vacunado->tracker_id = $request->get('tracker_id');
        $vacunado->cedula_tipo = $request->get('cedula_tipo');
        $vacunado->cedula = $request->get('cedula');
        $vacunado->cedula_scaned = $request->get('cedula_scaned');
        $vacunado->nombrefull = $request->get('nombrefull');
        $vacunado->primernombre = $request->get('primernombre');
        $vacunado->apellido = $request->get('apellido');
        $vacunado->sexo = $request->get('sexo');
        $vacunado->fechanac = $request->get('fechanac');
        $vacunado->correo = $request->get('correo');

        $vacunado->telefono= $request->get('telefono');
        $vacunado->vacuna_marca = $request->get('vacuna_marca');
        $vacunado->vacuna_sitio = $request->get('vacuna_sitio');
        $vacunado->vacuna_lote = $request->get('vacuna_lote');
        $vacunado->enfermera_cedula = $request->get('enfermera_cedula');
        $vacunado->enfermera_nombre = $request->get('enfermera_cnombre');
        $vacunado->ubicacion_lat = $request->get('ubicacion_lat');
        $vacunado->ubicacion_lon = $request->get('ubicacion_lon');
        $vacunado->fechanac_txt = $request->get('fechanac_txt');
        $vacunado->sitio_add = $request->get('sitio_add');
        $vacunado->cancelado = $request->get('cancelado');
        $vacunado->correo_enviado = $request->get('correo_enviado');
        $vacunado->tracker_user = $request->get('tracker_user');
        $vacunado->dosis = $request->get('dosis');
        $vacunado->condicion = $request->get('condicion');
        $vacunado->save();
    
        return redirect()->route('vacunados_vcp.index');
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
         $vacunado = vacunado::find($id);
         // retornamos la vista con los datos 
        
         return view('vacunados_vcp.show')->with('vacunado', $vacunado);
         // with() nos permite pasar variables a la vista
         // el primer parámetros es el nombre con el que estará disponible en la vista
         // el segundo son los datos. 
        
        
        //$vacunado = $vacunado;
        //$cent = centro::all();
        //return view('vacunados_vcp.show', compact('cent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacunado = vacunado::find($id);
        $vacuna = vacuna::all();
        $enfermera = enfermera::all();
        $condicion = condicion_especial::all();
        return view('vacunados_vcp.editar', compact('vacuna'), compact('enfermera'), compact('condicion'))->with('vacunado', $vacunado);
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
     
        
        $vacunado = vacunado::find($id);
        
        $vacunado->vac_id= $request->get('vac_id');
        $vacunado->fecha = $request->get('fecha');
        $vacunado->tracker_id = $request->get('tracker_id');
        $vacunado->cedula_tipo = $request->get('cedula_tipo');
        $vacunado->cedula = $request->get('cedula');
        $vacunado->cedula_scaned = $request->get('cedula_scaned');
        $vacunado->nombrefull = $request->get('nombrefull');
        $vacunado->primernombre = $request->get('primernombre');
        $vacunado->apellido = $request->get('apellido');
        $vacunado->sexo = $request->get('sexo');
        $vacunado->fechanac = $request->get('fechanac');
        $vacunado->correo = $request->get('correo');

        $vacunado->telefono= $request->get('telefono');
        $vacunado->vacuna_marca = $request->get('vacuna_marca');
        $vacunado->vacuna_sitio = $request->get('vacuna_sitio');
        $vacunado->vacuna_lote = $request->get('vacuna_lote');
        $vacunado->enfermera_cedula = $request->get('enfermera_cedula');
        $vacunado->enfermera_nombre = $request->get('enfermera_cnombre');
        $vacunado->ubicacion_lat = $request->get('ubicacion_lat');
        $vacunado->ubicacion_lon = $request->get('ubicacion_lon');
        $vacunado->fechanac_txt = $request->get('fechanac_txt');
        $vacunado->sitio_add = $request->get('sitio_add');
        $vacunado->cancelado = $request->get('cancelado');
        $vacunado->correo_enviado = $request->get('correo_enviado');
        $vacunado->tracker_user = $request->get('tracker_user');
        $vacunado->dosis = $request->get('dosis');
        $vacunado->condicion = $request->get('condicion');
        $vacunado->save();
    
        return redirect()->route('vacunados_vcp.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacunado = vacunado::find($id);
        $vacunado->delete();
        //return redirect()->route('/vacunados_vcp');
    }
}
