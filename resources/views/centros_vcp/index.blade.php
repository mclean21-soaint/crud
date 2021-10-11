@extends('adminlte::page')

@section('title', 'USUARIOS')



@section('content')
<div class="section-header">
  <h3 class="page__heading">CENTROS MANAGEMENT</h3>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
               

 <!--botones para download -->
 <div class="col-sm-12 col-md-6">
    <div class="dt-buttons btn-group flex-wrap"> <button
            class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
            aria-controls="example1" type="button"><span>Copy</span></button> <button
            class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
            aria-controls="example1" type="button"><span>CSV</span></button> <button
            class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
            aria-controls="example1" type="button"><span>Excel</span></button> <button
            class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
            aria-controls="example1" type="button"><span>PDF</span></button> <button
            class="btn btn-secondary buttons-print" tabindex="0"
            aria-controls="example1" type="button"><span>Print</span></button>
        <div class="btn-group"><button
                class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis"
                tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"
                aria-expanded="false"><span>Column visibility</span></button></div>
    </div>
</div>
<!--botones para download -->

                <div class="card-body">
        
      
                @can('crear-centros')
                <a class="btn btn-warning" href="{{ route('centros_vcp.create') }}">Nuevo</a>
                @endcan
      
                <table id="table1" class="table table-striped mt-2">
                        <thead style="background-color:#6777ef">                                     
                            <th style="display: none;">ID</th>
                            <th style="color:#fff;">Titulo</th>
                            <th style="color:#fff;">Contenido</th>                                    
                            <th style="color:#fff;">Acciones</th>                                                                   
                      </thead>
                      <tbody>
                    @foreach ($centros as $centro)
                    <tr>
                        <td style="display: none;">{{ $centro->id }}</td>                                
                        <td>{{ $centro->codigo }}</td>
                        <td>{{ $centro->centro }}</td>
                        <td>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                          </div>
                        </td>
                        <td>
                            <!-- <form action="{ route('centros_vcp.destroy',$centro->id) }}" method="POST">                                        
                                @can('editar-centro')
                                <a class="btn btn-info" href="{ route('centros_vcp.edit',$centro->id) }}">Editar</a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('borrar-centro')
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/b-2.0.1/b-html5-2.0.1/datatables.min.css"/>
 

@stop

@section('js')
<script>
    $(document).ready(function() {
    $('#table1').DataTable();
  } );
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/b-2.0.1/b-html5-2.0.1/datatables.min.js"></script>
    <script>
        $(function () {
          $("#table1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
         
        });
      </script>
@stop