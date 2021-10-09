@extends('adminlte::page')

@section('title', 'Consultas')



@section('content')
<div class="section-header">
    <h3 class="page__heading">CONSULTAS - VAC</h3>
  </div>

    <div class="container shadow p-3 mb-5 bg-body rounded">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-2 mb-3  !spacing ">
                    <div class="card-header" style="background-color:#6777ef"><h4 style="color:#fff;">{{ __('Cosultas') }}</h4></div>
    
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
                                <div class="col-6 ">
    
                                    <form action="{{ route('postsearch')}}" method="post">
                                        @csrf
                                        
                                            <label for="validationCustom01" class="form-label">Cedula o Pasaporte</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                name="validationCustom01" required>
    
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                         <button class="btn btn-primary" type="submit">Search</button>
                                       
                                    </form>
    
                                </div>
                                
                                <div class="col-6 ">
                                    
                                  
                                  @foreach( $responsearray as $resarray)
                                  @endforeach

                                  @isset($resarray)
                                
                                  <div class="card card-widget widget-user-2 shadow-sm">
                                    
                                     
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
                                              Followers <span class="float-right badge bg-danger">842</span>
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
    
        <table class="table table-hover table-sm .text-sm)" >
            <thead>
                <tr style="background-color:#6777ef">
                    <th style="color:#fff;"scope="col">#{{$cont=0}}</th>
                    <th style="color:#fff;"scope="col">fecha</th>
                    <th style="color:#fff;"scope="col">marca</th>
                    <th style="color:#fff;"scope="col">centro</th>
                    <th style="color:#fff;"scope="col">corregimiento</th>
                    <th style="color:#fff;"scope="col">dosis</th>
                    <th style="color:#fff;"scope="col">Nombre</th>
                    <th style="color:#fff;"scope="col">Cedula</th>
                    <th style="color:#fff;"scope="col">Sexo</th>
                    <th style="color:#fff;"scope="col">Fecha de nacimiento</th>
                    <th style="color:#fff;"scope="col">Fecha de creacion</th>
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







@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop





