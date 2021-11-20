@extends('adminlte::page')

@section('title', 'Consultas')



@section('content')
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
              <i class="fab fa-searchengin" aria-hidden="true"></i>
              <br>
              Search Vacunados
          </div>
          <div class="col-4 text-right">
              <a class="linkText" href="/home">Home Dashboard</a>
              <br>
              
          </div>
      </div>
  </div>
</header>

    <div class="container shadow p-3 mb-5 bg-body rounded">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-2 mb-3  !spacing ">
                    <div class="card-header" style="background-color:rgb(0, 46, 77)"><h4 style="color:#fff;">{{ __('Cosultas') }}</h4></div>
    
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
    
                        {{ __() }}
                        <br>
    
                        <div class="container-fluid !direction !spacing ">
                            <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-6">
    
                                    <form action="{{ route('postsearch')}}" method="post">
                                        @csrf
                                      

                                        
                                            <label for="validationCustom01" class="form-label">Cedula o Pasaporte</label>
                                            <!--estilo para el input--> 
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text bg-info">
                                              <i class="fas fa-id-card-alt"></i>
                                              
                                            </span>
                                          </div>
                                          <input type="text" class="form-control" id="validationCustom01"
                                                name="validationCustom01" required>
    
                                          <div class="input-group-append">
                                            <div class="input-group-text bg-success">
                                              <i class="fas fa-search-plus"></i>
                                              <button class="btn btn-xs text-white" type="submit">Search</button>
                                            </div>
                                          </div>
                                          
                                        </div>
                                        <br>
                                        <div class="text-center">
                                        <a href=""><i class="fas fa-camera fa-w-10 fa-3x text-dark"></i></a>
                                        <br>
                                        OCR
                                        <br>
                                      
                                        <br>
                                        <a href=""><i class="fas fa-qrcode fa-w-10 fa-3x text-dark"></i></a>
                                        <br>
                                        QR
                                        </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            
                                         <br>
                                         
                                    </form>
    
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    
                                  
                                  @foreach( $responsearray as $resarray)
                                  @endforeach

                                  @isset($resarray)


  
                                  


                                  <div class="card card-widget widget-user-2 shadow-sm">
                                      <!-- Add the bg color to the header using any of the bg-* classes -->
                                      <div class="widget-user-header bg-warning">
                                        <div class="widget-user-image">
                                          <img class="img-circle elevation-2" src="https://www.w3schools.com/w3css/img_avatar2.png" alt="User Avatar">
                                        </div>
                                     
                                        <!-- .widget-user-image -->
                                        <h3 class="widget-user-username"> {{$nombre = $resarray['nombre']}}</h3>
                                        <h5 class="widget-user-desc"> </h5>
                                      </div>
                                      <div class="card-footer p-0">
                                        <ul class="nav flex-column">
                                          <li class="nav-item">
                                              <a href="#" class="nav-link">
                                                  Cedula: {{$cedula = $resarray['cedula']}} <span class="float-right badge bg-primary">31</span>
                                              </a>
                                            </li>  
                                          <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              Nacionalidad <span class="float-right badge bg-primary">31</span>
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              Sexo: {{$sexo = $resarray['sexo']}} <span class="float-right badge bg-info">5</span>
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              Fecha de Nacimiento: {{$fecha1 = $resarray['fecha_nacimiento']}} <span class="float-right badge bg-success">12</span>
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              N° de dosis <span class="float-right badge bg-danger">842</span>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>

                                    @endisset ( )
                                 
                                </div>
    
                            </div>
    
    
    
    
                        </div>
    
    
                    </div>
                </div>
            </div>
        </div>
    
    
    
    
    <br>
    
        

    </div>

<div class="card" style="width:100%;">
   <div class="card-body">
    <table id="table1" class="table table-sm table-striped table-hover"style="width:100%">
      <thead>
          <tr style="background-color:rgb(0, 46, 77)">
              <th style="color:#fff;"scope="col">#{{$cont=0}}</th>
              <th style="color:#fff;"scope="col">fecha</th>
              <th style="color:#fff;"scope="col">marca</th>
              <th style="color:#fff;"scope="col">centro</th>
              <th style="color:#fff;"scope="col">corregimiento</th>
              <th style="color:#fff;"scope="col">dosis</th>
              <th style="color:#fff;"scope="col">Nombre</th>
              <th style="color:#fff;"scope="col">Cedula</th>
              <th style="color:#fff;"scope="col">Sexo</th>
              <th style="color:#fff;"scope="col">nacimiento</th>
              <th style="color:#fff;"scope="col">creat at</th>
          </tr>
      </thead>
      <tbody>

          @foreach( $responsearray as $resarray)

          <tr>
              <th scope="row">{{$cont=$cont + 1}}</th>
              <td> {{$resarray['fecha']}}</td>



              <td> {{$resarray['vacuna_marca']}}</td>
              <td> {{$resarray['centro_nombre']}}</td>
              <td> {{$resarray['corregimiento']}}</td>
              <td> {{$resarray['dosis']}}</td>

              <td> {{$resarray['nombre']}}</td>
              <td> {{$resarray['cedula']}}</td>
              <td> {{$resarray['sexo']}}</td>
              <td> {{$resarray['fecha_nacimiento']}}</td>
              <td> {{$resarray['creacion_fecha']}}</td>
          </tr>
          @endforeach

      </tbody>
  </table>
  </div>
</div>
     




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





