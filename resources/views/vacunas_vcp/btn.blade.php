


<form action="/vacunas_vcp/destroy/{{$id}}" method="POST">
   
    <a class="btn btn-sm text-success" href="{{ route('vacunas_vcp.show', $id) }}"><i class="fa fa-sm fa-fw fa-eye"></i></i></a>
                     
   <!-- can('editar-centro')-->
    <a class="btn btn-sm text-primary" href="{{ route('vacunas_vcp.edit',$id) }}"><i class="fa fa-sm fa-fw fa-edit"></i></i></a>
    <!-- endcan-->
 
      
        
    @csrf       
    @method('DELETE')
  
    <!-- can('borrar-centro')-->
    <button type="submit" class="btn btn-sm text-danger"><i class="fa fa-sm fa-fw fa-trash"></i></button>
    <!-- endcan-->
      
</form>
