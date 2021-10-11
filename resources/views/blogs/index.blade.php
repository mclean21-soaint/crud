@extends('adminlte::page')

@section('title', 'USUARIOS')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@stop

@section('content')
<div class="section-header">
  <h3 class="page__heading">BLOG MANAGEMENT</h3>
  
</div>
<div class="card" style="width:100%;">
  <img src="https://aig.gob.pa/wp-content/themes/innovacion.gob.pa/nuevo_logo2.png" class="card-img-top" width="100" height="90" alt="...">
  <div class="card-body">
     
    
<table id="table1" class="table table-striped table-hover"style="width:100%">
    <!--<div class=" justify-content-md-end">
        @can('crear-blog')
        <a class="btn btn-xs btn-success text-light justify-content-md-end" href="{{ route('blogs.create') }}"><i class="fas fa-lg fa-fw fa-plus-circle"></i>    Add New</a>
        @endcan
        </div> -->
    <thead class="bg-primary ">                                     
        <th style="display: none;">ID</th>
        <th style="color:rgb(253, 251, 251);">Titulo</th>
        <th style="color:rgb(252, 248, 248);">Contenido</th>                                    
        <th style="color:rgb(253, 251, 251);">
            @can('crear-blog')
            <a class="btn btn-sm btn-success text-light justify-content-md-end" href="{{ route('blogs.create') }}"><i class="fas fa-lg fa-fw fa-plus-circle"></i>    Add New</a>
            @endcan
        </th>   
         
       
                                                                    
  </thead>
  <tbody>
      
@foreach ($blogs as $blog)
<tr>
    <td style="display: none;">{{ $blog->id }}</td>                                
    <td>{{ $blog->titulo }}</td>
    <td>{{ $blog->contenido }}</td>
    <td>
        <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">                                        
            @can('editar-blog')
            <a class="btn btn-sm text-primary" href="{{ route('blogs.edit',$blog->id) }}"><i class="fa fa-sm fa-fw fa-edit"></i></i></a>
            @endcan

            @csrf
            @method('DELETE')
            @can('borrar-blog')
            <button type="submit" class="btn btn-sm text-danger "><i class="fa fa-sm fa-fw fa-trash"></i></button>
            @endcan
        </form>
    </td>
</tr>

@endforeach
</tbody>
</table>


</div>
</div> 
@stop



@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

<script>
    



        $(document).ready(function() {





    var table = $('#table1').DataTable( {
        responsive:true, autowidth:false,

        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#table1_wrapper .col-md-6:eq(0)' );




} );









    </script>
@stop