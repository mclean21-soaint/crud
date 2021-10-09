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
    
        <table id="table1" class="table table-hover table-sm" >
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


















        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="table1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">               <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button> <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="none" aria-describedby="example1_info">
              <thead>
              <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">Rendering engine</th><th class="sorting sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending">Browser</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>
              </thead>
              <tbody>
              
              
       
              
              <tr class="odd">
                <td class="dtr-control">Gecko</td>
                <td class="sorting_1">Seamonkey 1.1</td>
                <td class="">Win 98+ / OSX.2+</td>
                <td>1.8</td>
                <td>A</td>
              </tr><tr class="even">
                <td class="dtr-control" tabindex="0">Webkit</td>
                <td class="sorting_1">Safari 3.0</td>
                <td class="">OSX.4+</td>
                <td>522.1</td>
                <td>A</td>
              </tr><tr class="odd">
                <td class="dtr-control" tabindex="0">Webkit</td>
                <td class="sorting_1">Safari 2.0</td>
                <td class="">OSX.4+</td>
                <td>419.3</td>
                <td>A</td>
              </tr><tr class="even">
                <td class="dtr-control" tabindex="0">Webkit</td>
                <td class="sorting_1">Safari 1.3</td>
                <td class="">OSX.3</td>
                <td>312.8</td>
                <td>A</td>
              </tr><tr class="odd">
                <td class="dtr-control" tabindex="0">Webkit</td>
                <td class="sorting_1">Safari 1.2</td>
                <td class="">OSX.3</td>
                <td>125.5</td>
                <td>A</td>
              </tr><tr class="even">
                <td class="dtr-control" tabindex="0">Webkit</td>
                <td class="sorting_1">S60</td>
                <td class="">S60</td>
                <td>413</td>
                <td>A</td>
              </tr><tr class="odd">
                <td class="dtr-control">Misc</td>
                <td class="sorting_1">PSP browser</td>
                <td class="">PSP</td>
                <td>-</td>
                <td>C</td>
              </tr><tr class="even">
                <td class="dtr-control" tabindex="0">Presto</td>
                <td class="sorting_1">Opera for Wii</td>
                <td class="">Wii</td>
                <td>-</td>
                <td>A</td>
              </tr><tr class="odd">
                <td class="dtr-control">Presto</td>
                <td class="sorting_1">Opera 9.5</td>
                <td class="">Win 88+ / OSX.3+</td>
                <td>-</td>
                <td>A</td>
              </tr><tr class="even">
                <td class="dtr-control">Presto</td>
                <td class="sorting_1">Opera 9.2</td>
                <td class="">Win 88+ / OSX.3+</td>
                <td>-</td>
                <td>A</td>
              </tr></tbody>
              <tfoot>
              <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
              </tfoot>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
          </div>
          <!-- /.card-body -->
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





