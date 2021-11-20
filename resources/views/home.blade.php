@extends('adminlte::page')

@section('title', 'Home')


@section('content')
<!--<div class="section-header">
  <h3 class="page__heading">Home Dashboard</h3>
  
</div>-->
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
              <i class="fa fa-home" aria-hidden="true"></i>  
              <br>
              Home
          </div>
          <div class="col-4 text-right">
              <a class="linkText" href="/home">Home Dashboard</a>
              <br>
              
          </div>
      </div>
  </div>
</header>

<div class="card" style="width:100%;">
  <br>
  <div class="card-body">
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">150</font></font></h3>

        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nuevos pedidos</font></font></p>
      </div>
      <div class="icon">
        <i class="fas fa-shopping-cart"></i>
      </div>
      <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        Más información </font></font><i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">53 </font></font><sup style="font-size: 20px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">%</font></font></sup></h3>

        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Porcentaje de rebote</font></font></p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        Más información </font></font><i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">44</font></font></h3>

        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registros de usuarios</font></font></p>
      </div>
      <div class="icon">
        <i class="fas fa-user-plus"></i>
      </div>
      <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        Más información </font></font><i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sesenta y cinco</font></font></h3>

        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visitantes únicos</font></font></p>
      </div>
      <div class="icon">
        <i class="fas fa-chart-pie"></i>
      </div>
      <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        Más información </font></font><i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
</div>
</div>
</div>
@stop



@section('css')


    <style>
body {
  /**background-image: url('https://www.reddigital.lat/wp-content/uploads/2020/05/infografia-negocios-foto_23-2148340471.jpg');**/
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
  background-color: slategray
  width:100;
  height:600;

}

</style>













@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop





