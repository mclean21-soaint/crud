@extends('adminlte::page')

@section('title', 'ROLES')

@section('content')

<section class="section">
    <!--<div class="section-header">
        <h3 class="page__heading">Roles</h3>
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
              <i class="fas fa-user-tag" aria-hidden="true"></i>
              <br>
              Lsta de Roles
          </div>
          <div class="col-4 text-right">
              <a class="linkText" href="/home">Home Dashboard</a>
              <br>
              
          </div>
      </div>
  </div>
</header>
 
      
                <div class="card" style="width:100%;">
                    <div class="card-body">
    
                        <table id="table1" class="table table-striped table-hover"style="width:100%">
                            <thead style="background-color:rgb(0, 46, 77)">                                                          
                                <th style="color:#fff;">Role</th>
                                
                                <th> @can('crear-rol')
                                    <a class="btn btn-sm btn-success" href="{{ route('roles.create') }}"><i class="fas fa-plus-circle"></i> Add</a>                        
                                    @endcan </th>
                            </thead>  
                            <tbody>
                            @foreach ($roles as $role)
                            <tr>                           
                                <td>{{ $role->name }}</td>
                                <td>                                
                                    @can('editar-rol')
                                        <a class="btn btn-sm btn-primary" href="{{ route('roles.edit',$role->id) }}"><i class="fas fa-edit"></i>Edit</a>
                                    @endcan
                                    
                                    @can('borrar-rol')
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                                
                            </tr>
                            @endforeach
                            </tbody>               
                        </table>

                    
                    </div>
                </div>
           
 


@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<style>
  

</style>
@stop

@section('js')
<script>
    $(document).ready(function() {
    $('#table1').DataTable();
  } );
    </script>
@stop