@extends('adminlte::page')

@section('plugins.sweetalert2',true)

@section('title', 'CENTROS')



@section('content')
@can('editar-condicion_especial')
<div class="section-header">
  <!--<h3 class="page__heading">CENTROS MANAGEMENT</h3>-->
</div>

<header class="border-top footer" style="background-image: url(https://panamadigital-devpanamadigital.azurewebsites.net/images/footer.png);
background-size: cover;
background-repeat: no-repeat;">
  <div class="container-fluid">
    <div class="container-fluid col-12 text-right"style="color: rgb(136, 110, 110)">
      <a class="btn  btn-sm btn-danger text-white justify-content-md-end" href="/condiciones_especiales_vcp"><i class="far fa-window-close" style="background-color: danger"></i></a>
    </div> 
      <div class="row align-items-center text-white p-4">
          <div class="col-4 text-left">
              <a href="#" target="_blank">
                  <img src="https://panamadigital-devpanamadigital.azurewebsites.net/images/new/LogoAigBlanco.png" class="img-fluid">
              </a>
          </div>
          <div class="col-4 text-center">
              Vacunate - Panamá ©
              <br>
              <i class="fas fa-hand-holding-medical"></i>
              <br>
              Condiciones especiales
          </div>
          <div class="col-4 text-right">
              <a class="linkText" href="/home">Home Dashboard</a>
              <br>
              <a class="linkText" href="/condiciones_especiales_vcp">condiciones especiales</a>
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


            <form action="/condiciones_especiales_vcp/{{$condicion_especial->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
<!--primera columna -->
                <div  class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                    <br>
                    <div class="col-12">
                        <div class="form-group">
                           <label for="nombre">Nombre</label>
                           <input type="text" name="nombre" class="form-control" value="{{ $condicion_especial->nombre }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                           <label for="codigo">Codigo</label>
                           <input type="text" name="codigo" class="form-control" value="{{ $condicion_especial->codigo }}">
                        </div>
                    </div>
            <br><br>
            <div class="text-right">
            <button id="save" type="submit" class="btn btn-success"><i class="fas fa-save"></i>   Save</button>   
            
            <a href="/condiciones_especiales_vcp" class="btn btn-danger"><i class="fas fa-ban"></i>   Cancel</a>  
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
$("#save").click(function(){
    
    Swal.fire(
  'Good job!',
  'Your work has been saved!',
  ''
)

});
</script>
@stop
        

