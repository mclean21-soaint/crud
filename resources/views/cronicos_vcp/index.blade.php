@extends('adminlte::page')

@section('title', 'CRONICO')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<style>
  

</style>
@stop

@section('content')
<!--<div class="section-header">
  <h3 class="page__heading">Crud Centros</h3>  
</div>-->
<header class="border-top footer" style="background-image: url(https://panamadigital-devpanamadigital.azurewebsites.net/images/footer.png);
background-size: cover;
background-repeat: no-repeat;">
  <div class="container-fluid">
    <div class="container-fluid col-12 text-right"style="color: rgb(136, 110, 110)">
      <a class="btn  btn-sm btn-danger text-white justify-content-md-end" href="/home"><i class="far fa-window-close" style="background-color: danger"></i></a>
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
              Lista cronicos
          </div>
          <div class="col-4 text-right">
            <a class="linkText" href="/home">Home Dashboard</a>
            <br>
            @can('crear-cronico')
            <a class="linkText" href="/cronicos_vcp/create">Crear cronico</a>
            <br>
            @endcan           
        </div>
      </div>
  </div>
</header>





<div class="card" style="width:100%;">


  <!--<img src="https://aig.gob.pa/wp-content/themes/innovacion.gob.pa/nuevo_logo2.png" class="card-img-top center" width="50" height="50" alt="...">   -->
  <div class="card-body">
     
    <table id="table1" class="table table-striped table-hover"style="width:100%">
      <thead style="background-color:rgb(0, 46, 77)">                                     
          <th style="color:#fff;">ID</th>
          <th style="color:#fff;">Nombre</th>
          <th style="color:#fff;">Codigo</th>                                    
          <th style="color:#fff;">
            @can('crear-centro')
            <a class="btn btn-sm btn-success text-light justify-content-md-end" href="{{ route('cronicos_vcp.create') }}"><i class="fas fa-lg fa-fw fa-plus-circle"></i>    Add</a>
            @endcan
          </th>                                                            
    </thead>
    
</table>


</div>
</div> 
@stop


@section('js')

<script>
 
$('#table1').DataTable({

  "serverSide": true,
  "ajax":"{{url('api/cronicos_vcp')}}",
  "columns":[
        
        {data: 'id'},
        {data: 'nombre'},
        {data: 'codigo'},
        {data: 'action'},
       
      ]
}); 
  
    
    </script>
@stop