@extends('adminlte::page')

@section('title', 'USUARIOS')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('content')
<!--
<div class="section-header">
  <h3 class="page__heading">BLOG MANAGEMENT</h3>
  
</div>-->
<div class="card" style="width:100%;">
 
    <footer class="border-top footer">
        <!--<img src="http://tuderechoasaber.com.do/wp-content/uploads/2019/02/blockchain.gif" alt="" width="100%"   height="150px"srcset="">-->
        <div class="container-fluid col-12 text-right"style="background-color: white">
            <a class="text-danger justify-content-md-end" href="/home"><i class="fa fa-window-close" style="background-color: danger"></i></a>
         
        </div>  
        <div class="container-fluid" style="background-color:  #04366b">
     
              <div class="row align-items-center text-white p-4">
                <div class="col-4 text-left">
                    <a href="https://innovacion.gob.pa/" target="_blank">
                       <!-- <img src="https://aig.gob.pa/wp-content/themes/innovacion.gob.pa/nuevo_logo2.png" class="img-fluid">-->
                    </a>
                </div>
                <div class="col-4 text-center">
                   <a href="" style="color: rgb(253, 251, 251)">Vacunate Panama</a>
                </div>
                <div class="col-4 text-right">
    
                  
                  <img src="https://aig.gob.pa/wp-content/themes/innovacion.gob.pa/nuevo_logo2.png" class="img-fluid" style="background-color: rgba(252, 252, 252, 0.76)">
                   
            </div>
        </div>
    </footer>
 
    <div class="card-body">
     
    
<table id="table1" class="table table-striped table-hover"style="width:100%">
    <!--<div class=" justify-content-md-end">
        @can('crear-blog')
        <a nnjjjj,jjjjjjjjkjclass="btn btn-xs btn-success text-light justify-content-md-end" href="{{ route('blogs.create') }}"><i class="fas fa-lg fa-fw fa-plus-circle"></i>    Add New</a>
        @endcan
        </div> -->
        <thead style="background-color:#6777ef">                                      
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
            <a class="btn btn-sm text-primary" href="{{ route('blogs.edit',$blog->id) }}"><i class="fa fa-sm fa-fw fa-edit"></i></a>
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