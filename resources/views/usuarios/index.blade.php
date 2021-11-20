@extends('adminlte::page')

@section('title', 'USUARIOS')



@section('content')
<!--<div class="section-header">
  <h3 class="page__heading">USERS MANAGEMENT</h3>
</div> -->

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
              <i class="fa fa-users" aria-hidden="true"></i>
              <br>
              Lsta de Usuarios
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
                                  <th style="display: none;">ID</th>
                                  <th style="color:#fff;">Name</th>
                                  <!--<th style="color:#fff;">E-mail</th>-->
                                  <th style="color:#fff;">Role</th>
                                  <th style="color:#fff;">Off/On</th>
                                  <th> 
                                    <!--<a class="btn btn-success" href="{ route('usuarios.create') }}"> <i class="fas fa-plus-circle"></i> New</a> -->
                                    @can('crear-vacunado')
                                     <a class="btn btn-sm btn-success text-light justify-content-md-end" href="{{ route('usuarios.create') }}"><i class="fas fa-lg fa-fw fa-plus-circle"></i> Add</a>
                                     @endcan     
                                  </th>                                                                  
                              </thead>
                              <tbody>
                                @foreach ($usuarios as $usuario)
                                  <tr>
                                    <td style="display: none;">{{ $usuario->id }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <!--<td>{ $usuario->email }}</td>-->
                                    <td>
                                      @if(!empty($usuario->getRoleNames()))
                                        @foreach($usuario->getRoleNames() as $rolNombre)                                       
                                          <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                        @endforeach
                                      @endif
                                    </td>
                                    
                                    <td><div class="form-group">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" value="true">
                                        <label class="custom-control-label" for="customSwitch1"></label>
                                      </div>
                                    </div></td>
                                  
                                    <td>                                  
                                      <!--<a class="btn btn-info btn-sm" href="{ route('usuarios.edit',$usuario->id) }}"><i class="fa fa-sm fa-fw fa-edit"></i> Edit</a>-->
                                      <a class="btn btn-sm btn-primary" href="{{ route('usuarios.edit',$usuario->id) }}"><i class="fa fa-sm fa-fw fa-edit"></i> Edit</a>
                                      {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                    
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $usuarios->links() !!}
                          </div>     
                            
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