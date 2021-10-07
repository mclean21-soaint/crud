@extends('adminlte::page')

@section('title', 'Vacunados')



@section('content')
<div class="section-header">
  <h3 class="page__heading">VACUNADOS MANAGEMENT</h3>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
        
      
                @can('crear-vacunado')
                <!--<a class="btn btn-warning" href="{ route('vacunados_vcp.crear') }}">Nuevo</a>-->
                @endcan
      
                <table class="table table-striped mt-2">
                        <thead style="background-color:#6777ef">                                     
                            <th style="display: none;">ID</th>
                            <th style="color:#fff;">Titulo</th>
                            <th style="color:#fff;">Contenido</th>                                    
                            <th style="color:#fff;">Acciones</th>                                                                   
                      </thead>
                      <tbody>
                    @foreach ($vacunados as $vacunado)
                    <tr>
                        <td style="display: none;">{{ $vacunado->id }}</td>                                
                        <td>{{ $vacunado->fecha }}</td>
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

                <!-- Ubicamos la paginacion a la derecha -->
                <div class="pagination justify-content-end">
                 
                    {!! $vacunados->links() !!}
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