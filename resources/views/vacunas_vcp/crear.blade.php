@extends('adminlte::page')

@section('title', 'CREAR VACUNA')



@section('content')
@can('crear-vacuna')
<div class="section-header">
  <!--<h3 class="page__heading">CENTROS MANAGEMENT</h3>-->
</div>
<header class="border-top footer" style="background-image: url(https://panamadigital-devpanamadigital.azurewebsites.net/images/footer.png);
background-size: cover;
background-repeat: no-repeat;">
  <div class="container-fluid">
    <div class="container-fluid col-12 text-right"style="color: rgb(136, 110, 110)">
      <a class="btn  btn-sm btn-danger text-white justify-content-md-end" href="/vacunas_vcp"><i class="far fa-window-close" style="background-color: danger"></i></a>
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
              <i class="fas fa-syringe" aria-hidden="true"></i>
              <br>
              Crear Vacuna
          </div>
          <div class="col-4 text-right">
              <a class="linkText" href="../home">Home Dashboard</a>
              <br>
              <a class="linkText" href="/vacunas_vcp">Lista de Vacunas</a>
          </div>
      </div>
  </div>
</header>


<div class="section-body">
    <div  class="row">
        <div  class="col-lg-12">
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

            <form action="/vacunas_vcp" method="POST">
                @csrf
                <div class="">
                <div class="row">
<!--primera columna -->
                <div  class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                    <br>
                    <div class="col-12">
                        <div class="form-group">
                           <label for="nombre">Nombre de vacuna</label>
                           <input type="text" name="nombre" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                           <label for="codigo">Codigo de vacuna</label>
                           <input type="text" name="codigo" class="form-control">
                        </div>
                    </div>
               
                <div class="col-12">
                    <div class="form-group">
                       <label for="tipo">Tipo</label>
                       <input type="text" name="tipo" class="form-control">
                    </div>
                </div>
                <div class="text-right">
                    <button id="save" type="submit" class="btn btn-success"><i class="fas fa-save"></i>   Save</button>   
                    
                    <a href="/vacunas_vcp" class="btn btn-danger"><i class="fas fa-ban"></i>   Cancel</a>  
                </div>
                </div>

<!--segunda columna -->

            <div class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                <br>
                

            </div>


<!--tercera columna -->
            <div class="col-xs-4 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                <br>
                
            </div>
       
      
     
        
                                       
                </div>
            </div>
            </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endcan
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .columns {
  display: inline-block;
  box-sizing: border-box;
  margin: 10px;
  padding: 20px;
  -webkit-columns: 150px 3;
  -moz-columns: 150px 3;
  columns: 150px 3;
  column-fill: auto;
  column-gap: 10px;
  background: #eee;
  border-radius: 5px;
  /*font: normal 14px Verdana, Arial, Helvetica, sans-serif;*/
  font-size: 16px;
}
h4 {
  font-size: 24px;
  -webkit-column-span: all;
  column-span: all;
  margin: 5px 5px 10px;
  padding: 5px;
  border-bottom: solid 1px #666;
}
p {
  margin: 0 5px 10px;
  padding: 5px;
}
    </style>
          
@stop

@section('js')
    <script> console.log('Hi!'); </script>

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
        

