@extends('adminlte::page')

@section('title', 'Enfermeras')



@section('content')
<div class="section-header">
  <h3 class="page__heading">VACUNADOS MANAGEMENT</h3>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
        
      
                @can('crear-enfermera')
                 <!-- <a class="btn btn-warning" href="{ route('enfermeras_vcp.crear') }}">Nuevo</a>-->
                @endcan
      
                <table id="table1"class="table table-striped mt-2">
                        <thead style="background-color:#6777ef">                                     
                            <th style="display: none;">ID</th>
                            <th style="color:#fff;">Titulo</th>
                            <th style="color:#fff;">Contenido</th>                                    
                            <th style="color:#fff;">Acciones</th>                                                                   
                      </thead>
                      <tbody>
                        @foreach ($vacunados as $vacunado)
                        <tr>
                                                          
                           
                            <td>{{ $vacunado->cedula}}</td>
                            <td>{{ $vacunado->nombrefull }}</td>
                            <td>{{ $vacunado->vacuna_marca }}</td>
                            <td>{{ $vacunado->dosis }}</td>
                            <td>
                                <!-- <form action="{ route('centros_vcp.destroy',$centro->id) }}" method="POST">                                        
                                    @can('editar-vacunado')
                                    <a class="btn btn-info" href="{ route('centros_vcp.edit',$centro->id) }}">Editar</a>
                                    @endcan
    
                                    @csrf
                                    @method('DELETE')
                                    @can('borrar-vacunado')
                                    @endcan
                                </form>  -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

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
<script>
    $(document).ready(function() {
    $('#table1').DataTable();
  } );
    </script>
@stop