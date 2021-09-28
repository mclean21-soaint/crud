@extends('adminlte::page')

@section('title', 'ROLES')

@section('content')

<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Roles</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
    
                   
    
            
                        <table class="table table-striped mt-2">
                            <thead style="background-color:#6777ef" >                                                       
                                <th style="color:#fff;">Role</th>
                                <th style="color:#fff;">Actions</th>
                                <th> @can('crear-rol')
                                    <a class="btn btn-success" href="{{ route('roles.create') }}"><i class="fas fa-plus-circle"></i> New</a>                        
                                    @endcan </th>
                            </thead>  
                            <tbody>
                            @foreach ($roles as $role)
                            <tr>                           
                                <td>{{ $role->name }}</td>
                                <td>                                
                                    @can('editar-rol')
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}"><i class="fas fa-edit"></i>Edit</a>
                                    @endcan
                                    
                                    @can('borrar-rol')
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                                <td></td>
                            </tr>
                            @endforeach
                            </tbody>               
                        </table>

                        <!-- Centramos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $roles->links() !!} 
                        </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop