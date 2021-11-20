@extends('adminlte::page')

@section('title', 'CRONICO')



@section('content')
@can('ver-cronico')
<div class="section-header">
  <!--<h3 class="page__heading">CENTROS MANAGEMENT</h3>-->
    
</div>
<header class="border-top footer" style="background-image: url(https://panamadigital-devpanamadigital.azurewebsites.net/images/footer.png);
background-size: cover;
background-repeat: no-repeat;">
  <div class="container-fluid">
    <div class="container-fluid col-12 text-right"style="color: rgb(136, 110, 110)">
      <a class="btn  btn-sm btn-danger text-white justify-content-md-end" href="/cronicos_vcp"><i class="far fa-window-close" style="background-color: danger"></i></a>
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
              <i class="fas fa-file-medical"></i>
              <br>
              Detalles de Cronicos
          </div>
          <div class="col-4 text-right">
              <a class="linkText" href="/home">Home Dashboard</a>
              <br>
              @can('ver-centro')
              <a class="linkText" href="/cronicos_vcp">Lista de cronicos</a>
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


            <form action="/cronicos_vcp" >
                @csrf
                
                <div class="row">
<!--primera columna -->
                <div   class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                    <br>
                    <div class="col-12">
                        <div class="form-group">
                           <label for="nombre">Nombre de cronico</label>
                           <input type="text" name="nombre" class="form-control" value="{{ $cronico->nombre }}" readonly>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                           <label for="codigo">Codigo de cronico</label>
                           <input type="text" name="codigo" class="form-control" value="{{ $cronico->codigo }}"readonly>
                        </div>
                    </div>
               
            </div>

<!--segunda columna -->

            <div  class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                <br>
                

            </div>


<!--tercera columna -->
            <div  class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                <br>
                
            
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
        

