@extends('adminlte::page')

@section('title', 'CENTROS')



@section('content')
@can('ver-centro')
<div class="section-header">
  <!--<h3 class="page__heading">CENTROS MANAGEMENT</h3>-->
    
</div>
<header class="border-top footer" style="background-image: url(https://panamadigital-devpanamadigital.azurewebsites.net/images/footer.png);
background-size: cover;
background-repeat: no-repeat;">
  <div class="container-fluid">
    <div class="container-fluid col-12 text-right"style="color: rgb(136, 110, 110)">
      <a class="btn  btn-sm btn-danger text-white justify-content-md-end" href="/centros_vcp"><i class="far fa-window-close" style="background-color: danger"></i></a>
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
              <i class="fas fa-clinic-medical"></i>
              <br>
              Detalles de Centros
          </div>
          <div class="col-4 text-right">
              <a class="linkText" href="/home">Home Dashboard</a>
              <br>
              @can('ver-centro')
              <a class="linkText" href="/centros_vcp">Lista de centros</a>
              <br>
              @endcan           
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


            <form action="/centros_vcp" >
                @csrf
                
                <div class="row">
<!--primera columna -->
                <div   class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                    <br>
                    <div class="col-12">
                        <div class="form-group">
                           <label for="codigo">Codigo de centro</label>
                           <input type="text" name="codigo" class="form-control" value="{{ $centro->codigo }}" readonly>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                           <label for="codigo">Nombre de centro</label>
                           <input type="text" name="centro" class="form-control" value="{{ $centro->centro }}"readonly>
                        </div>
                    </div>
               
                <div class="col-12">
                    <div class="form-group">
                       <label for="codigo">Provincia</label>
                       <input type="text" name="codigo" class="form-control " value="{{ $centro->provincia }}"readonly>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                       <label for="codigo">Distrito</label>
                       <input type="text" name="codigo" class="form-control" value="{{ $centro->distrito }}"readonly>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                       <label for="codigo">corregimiento</label>
                       <input type="text" name="codigo" class="form-control" value="{{ $centro->corregimiento }}"readonly>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                       <label for="codigo">circuito</label>
                       <input type="text" name="codigo" class="form-control" value="{{ $centro->circuito }}"readonly>
                    </div>
                </div>
            </div>

<!--segunda columna -->

            <div  class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                <br>
                <div class="col-12">
                    <div class="form-group">
                       <label for="codigo">Codigo de corregimiento</label>
                       <input type="text" name="codigo" class="form-control" value="{{ $centro->codigo_corregimiento }}"readonly>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                       <label for="codigo">longitud</label>
                       <input type="text" name="codigo" class="form-control" value="{{ $centro->geolon }}"readonly>
                    </div>
                </div>
           
            <div class="col-12">
                <div class="form-group">
                   <label for="codigo">latitud</label>
                   <input type="text" name="codigo" class="form-control" value="{{ $centro->geolat}}"readonly>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                   <label for="codigo">Despacho</label>
                   <input type="text" name="codigo" class="form-control" value="{{ $centro->despacho}}"readonly>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                   <label for="codigo">Recepcion</label>
                   <input type="text" name="codigo" class="form-control" value="{{ $centro->recepcion }}"readonly>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                   <label for="codigo">Vacunacion</label>
                   <input type="text" name="codigo" class="form-control" value="{{ $centro->vacunacion }}"readonly>
                </div>
            </div>

            </div>


<!--tercera columna -->
            <div  class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                <br>
                <div  class="col-12">
                    <div class="form-group">
                       <label for="codigo">Creado</label>
                       <input type="text" name="codigo" class="form-control" value="{{ $centro->created_at }}"readonly>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                       <label for="codigo">Actualizado</label>
                       <input type="text" name="codigo" class="form-control" value="{{ $centro->updated_at}}"readonly>
                    </div>
                </div>
           
            <div class="col-12">
                <div class="form-group">
                   <label for="codigo">Borrado</label>
                   <input type="text" name="codigo" class="form-control" value="{{ $centro->borrado }}"readonly>
                </div>
            </div>
            
        </div>
                  
      
                <button type="submit" class="btn btn-primary"><i class="fas fa-times-circle"></i>  Close</button> 
          
                                              
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
@stop
        

