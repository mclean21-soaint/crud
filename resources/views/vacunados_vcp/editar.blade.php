@extends('adminlte::page')

@section('plugins.sweetalert2',true)

@section('title', 'VACUNADO')



@section('content')
@can('editar-vacunado')
<div class="section-header">
  <!--<h3 class="page__heading">CENTROS MANAGEMENT</h3>-->
</div>

<header class="border-top footer" style="background-image: url(https://panamadigital-devpanamadigital.azurewebsites.net/images/footer.png);
background-size: cover;
background-repeat: no-repeat;">
  <div class="container-fluid">
    <div class="container-fluid col-12 text-right"style="color: rgb(136, 110, 110)">
      <a class="btn  btn-sm btn-danger text-white justify-content-md-end" href="/vacunados_vcp"><i class="far fa-window-close" style="background-color: danger"></i></a>
    </div> 
      <div class="row align-items-center text-white p-4">
          <div class="col-4 text-left">
              <a href="https://innovacion.gob.pa/" target="_blank">
                  <img src="https://panamadigital-devpanamadigital.azurewebsites.net/images/new/LogoAigBlanco.png" class="img-fluid">
              </a>
          </div>
          <div class="col-4 text-center">
              Vacunate - Panamá ©
              <br>
              <i class="fas fa-notes-medical" aria-hidden="true"></i>
              <br>
              Editar vacunado
          </div>
          <div class="col-4 text-right">
              <a class="linkText" href="/home">Home Dashboard</a>
              <br>
              <a class="linkText" href="/vacunados_vcp">Lista de vacunados</a>
          </div>
      </div>
  </div>
</header>




            <div class="card">
              
                <div class="card-body">                            
           
                @if ($errors->any())                                                
                    <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <strong>¡Revise los campos!</strong>                        
                        @foreach ($errors->all() as $error)                                    
                            <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach                        
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif


            <form action="/vacunados_vcp/{{$vacunado->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <!--primera columna value=date("y-m-d, strtotime( {$vacunado->fecha}}))-->
                                    <div   class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                                        <br>
                                       
                                        <div class="col-12">
                                            <div class="form-group">
                                               <label for="fecha">Fecha</label>                                            
                                               <input type="text" name="fecha" class="form-control" value="{{$vacunado->fecha}}">
                                            </div>
                                        </div> 
                                   
                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="cedula_tipo">cedula_tipo</label>
                                           <input type="text" name="cedula_tipo" class="form-control" value="{{ $vacunado->cedula_tipo }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="cedula_scaned">cedula_scaned</label>
                                           <input type="text" name="cedula_scaned" class="form-control" value="{{ $vacunado->cedula_scaned }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="cedula">cedula</label>
                                           <input type="text" name="cedula" class="form-control" value="{{ $vacunado->cedula }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="nombrefull">nombre</label>
                                           <input type="text" name="nombrefull" class="form-control" value="{{ $vacunado->nombrefull }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="fechanac">Fecha de nacimiento</label>
                                           <input type="text" name="fecahanac" class="form-control" value="{{ $vacunado->fechanac }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="sexo">Sexo</label>
                                           <input type="text" name="sexo" class="form-control" value="{{ $vacunado->sexo }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="correo">Correo</label>
                                           <input type="text" name="correo" class="form-control" value="{{ $vacunado->correo}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="telefono">telefono</label>
                                           <input type="text" name="telefono" class="form-control" value="{{ $vacunado->telefono}}">
                                        </div>
                                    </div>
                                </div>
                    
                    <!--segunda columna -->
                    
                                <div  class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                                    <br>
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="enfermera_cedula">Cedula de enfermera</label>
                                           <!--<input type="text" name="enfermera_cedula" class="form-control" value="{ $vacunado->enfermera_cedula}}">-->
                                           <input list="enfermera" name="enfermera_cedula" id="enfermera_cedula" class="form-control" value="{{$vacunado->enfermera_cedula}}">
                                        <datalist id="enfermera" >
                                              @foreach ($enfermera as $enfermera)
                                            <option value="{{$enfermera['usuario']}}"> {{$enfermera['nombre']}}</option>
                                            
                                            @endforeach
                                            
                                        </datalist>
                                        </div>
                                    </div>
                               
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="enfermera_nombre">Nombre de enfermera</label>
                                            <input type="text" name="enfermera_nombre" id="enfermera_nombre" class="form-control" value="{{ $vacunado->enfermera_nombre }}">
                                        </div>
                                    </div> 
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="fechanac_txt">condicion del vacunado</label>
                                           <input type="text" name="fechanac_txt" class="form-control" value="{{ $vacunado->condicion }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="tracker_user">dosis del vacunado</label>
                                           <input type="text" name="dosis" class="form-control" value="{{ $vacunado->dosis }}">
                                        </div>
                                    </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <!--<<label for="vacuna_marca">Vacuna marca</label>
                                      input type="text" name="vacuna_marca" class="form-control" value="{ $vacunado->vacuna_marca }}">
                                        
                                          <select class="form-control" id="inputvacuna_id" name="vacuna_id" >
                                        foreach ($vacuna as $vacuna)
                                        
                                        <option value="{$vacuna['id']}}"> {$vacuna['nombre']}}</option>
                                        endforeach
                                        </select> 
                                    -->
                                                                              
                                     
                                        <label for="browser">Vacuna marca</label><br>
                                        <input list="vacuna" name="vacuna_marca" id="vacuna_marca" class="form-control" value="{{$vacunado->vacuna_marca}}">
                                        <datalist id="vacuna" >
                                              @foreach ($vacuna as $vacuna)
                                            <option value="{{$vacuna['nombre']}}"> {{$vacuna['id']}}</option>
                                            @endforeach
                                            
                                        </datalist>
                                        
                                    </div>
                                </div>
                                <div  class="col-12">
                                    <div class="form-group">
                                       <label for="vacuna_lote">vacuna lote</label>
                                       <input type="text" name="vacuna_lote" class="form-control" value="{{ $vacunado->vacuna_lote }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                       <label for="vacuna_sitio">vacuna sitio</label>
                                       <input type="text" name="vacuna_sitio" class="form-control" value="{{ $vacunado->vacuna_sitio }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                       <label for="sitio_add">sitio_add</label>
                                       <input type="text" name="sitio_add" class="form-control" value="{{ $vacunado->sitio_add }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                       <label for="ubicacion_lat">ubicacion latitud</label>
                                       <input type="text" name="ubicacion_lat" class="form-control" value="{{ $vacunado->ubicacion_lat }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                       <label for="ubicacion_lon">ubicacion longitud</label>
                                       <input type="text" name="ubicacion_lon" class="form-control" value="{{ $vacunado->ubicacion_lon }}">
                                    </div>
                                </div>
                    
                                </div>
                    
                    
                    <!--tercera columna -->
                                <div  class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                                    <br>
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="vac_id">Vac-id</label>
                                           <input type="text" name="vac_id" class="form-control" value="{{ $vacunado->vac_id }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                           <label for="tracker_id">Tracker-id</label>
                                           <input type="text" name="tracker_id" class="form-control " value="{{ $vacunado->tracker_id }}">
                                        </div>
                                    </div>
                                    
                                    
                               
                                <div class="col-12">
                                    <div class="form-group">
                                       <label for="enviadoAt">fecha de enviado</label>
                                       <input type="text" name="enviadoAt" class="form-control" value="{{ $vacunado->enviadoAt }}">
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <div class="form-group">
                                       <label for="fechanac_txt">fechanac_txt</label>
                                       <input type="text" name="fechanac_txt" class="form-control" value="{{ $vacunado->fechanac_txt }}">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                       <label for="cancelado">cancelado</label>
                                       <input type="text" name="cancelado" class="form-control" value="{{ $vacunado->cancelado }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                       <label for="correo_enviado">correo_enviado</label>
                                       <input type="text" name="correo_enviado" class="form-control" value="{{ $vacunado->correo_enviado }}">
                                    </div>
                                </div>
            <br><br>
            <div class="text-right">
            <button id="save" type="submit" class="btn btn-success"><i class="fas fa-save"></i>   Save</button>   
            
            <a href="/vacunados_vcp" class="btn btn-danger"><i class="fas fa-ban"></i>   Cancel</a>  
          </div>
        </div>
                  
                                                
                </div>
            </form>

                </div>
            </div>
      
@endcan
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
     
    </style>
          
@stop

@section('js')


    <script> console.log('Hi!'); </script>
    <script>

$("#enfermera_cedula").change(function() {
  console.log($("#enfermera_cedula").val());
  //$("#enfermera_nombre").val("aqui");
    
  //Swal.fire(  'Good job!',  'changed!',  'success')

});
    </script>
    
<script> 
$("#save").click(function(){
    
    Swal.fire(
  'Good job!',
  'Your work has been saved!',
  'success'
)

});
</script>
@stop
        

