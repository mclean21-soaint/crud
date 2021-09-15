@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>



    <div class="container shadow p-3 mb-5 bg-body rounded">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-2 mb-3  !spacing ">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
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
    
                                    <form action="{{ route('posthome')}}" method="post">
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
    
                                    Nombre:
                                    <br>
                                    Cedula:
                                    <br>
                                    Sexo:
                                    <br>
                                    Fecha de nacimiento:
                                    <br>
                                    Fecha de creacion:
    
                                </div>
    
                            </div>
    
    
    
    
                        </div>
    
    
                    </div>
                </div>
            </div>
        </div>
    
    
    
    
    <br>
    
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#{{$cont=0}}</th>
                    <th scope="col">fecha</th>
                    <th scope="col">marca</th>
                    <th scope="col">centro</th>
                    <th scope="col">corregimiento</th>
                    <th scope="col">dosis</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Fecha de creacion</th>
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





