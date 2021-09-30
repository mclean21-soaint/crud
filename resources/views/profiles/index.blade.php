@extends('adminlte::page')

@section('title', 'PROFILE USUARIOS')

@section('plugins.sweetalert2',true)

@section('content')
<div class="section-header">
  <h3 class="page__heading">profile USERS MANAGEMENT</h3>
</div>

          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">                           
                          
                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">                                     
                                  <th style="display: none;">ID</th>
                                  <th style="color:#fff;">Name</th>
                                  <th style="color:#fff;">E-mail</th>
                                  <th style="color:#fff;">Role</th>
                                  <th style="color:#fff;">Actions</th> 
                                  <TH> <a class="btn btn-success" href="{{ route('usuarios.create') }}"> <i class="fas fa-plus-circle"></i> New</a>        </TH>                                                                  
                              </thead>
                              <tbody>
                                @foreach ($usuarios as $usuario)
                                  <tr>
                                    <td style="display: none;">{{ $usuario->id }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>
                                      @if(!empty($usuario->getRoleNames()))
                                        @foreach($usuario->getRoleNames() as $rolNombre)                                       
                                          <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                        @endforeach
                                      @endif
                                    </td>

                                    <td>                                  
                                      <a class="btn btn-info" href="{{ route('usuarios.edit',$usuario->id) }}"><i class="fas fa-edit"></i> Edit</a>

                                      {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit(' Delete', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                    <td></td>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 

Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
     </script>
@stop