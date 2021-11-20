@extends('adminlte::page')

@section('title', 'CREAR CENTRO')



@section('content')
@can('crear-centro')
<div class="section-header">
  <!--<h3 class="page__heading">CENTROS MANAGEMENT</h3>-->
</div>
<header class="border-top footer" style="background-image: url(https://panamadigital-devpanamadigital.azurewebsites.net/images/footer.png);
background-size: cover;
background-repeat: no-repeat;">
  <div class="container-fluid">
    <div class="container-fluid col-12 text-right"style="color: rgb(136, 110, 110)">
      <a class="btn  btn-sm btn-danger text-white justify-content-md-end" href="/centros_vcp"><i class="far fa-window-close" style="background-color: danger"></i></a>
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
              <i class="fas fa-clinic-medical"></i>
              <br>
              Crear Centro
          </div>
          <div class="col-4 text-right">
              <a class="linkText" href="../home">Home Dashboard</a>
              <br>
              <a class="linkText" href="/centros_vcp">Lista de centros</a>
          </div>
      </div>
  </div>
</header>


<div class="section-body">
    <div  class="row">
        <div  class="col-lg-12">
            <div class="card">

                <div class="card-body">                            
           
                @if ($errors->any())                                                
                    <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <strong>¡Revise los campos!</strong>                        
                        @foreach ($errors->all() as $error)                                    
                            <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach                        
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif

            <form action="/centros_vcp" method="POST">
                @csrf
                <div class="">
                <div class="row">
<!--primera columna -->
                <div  class="col-xs-12 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <label for="codigo">Codigo de centro</label>
                           <input type="text" name="codigo" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <label for="codigo">Nombre de centro</label>
                           <input type="text" name="centro" class="form-control">
                        </div>
                    </div>
               
                    <div class="col-12">
                        <div class="form-group">
                           <label for="codigo">Provincia</label>
                           <!--<input type="text" name="provincia" class="form-control " value="{ $centro->provincia }}">-->
                           <select class="form-control" id="sel1" name="provincia" required="">
                            <option></option>
                            <option> Provincia de Bocas del Toro </option>
                            <option> Provincia de Chiriquí </option>
                            <option> Provincia de Coclé </option>
                            <option> Provincia de Colón </option>
                            <option> Provincia del Darién </option>
                            <option> Provincia de Herrera </option>
                            <option> Provincia de Los Santos </option>
                            <option> Provincia de Panamá </option>
                            <option> Provincia de Panamá Oeste </option>
                            <option> Provincia de Veraguas </option>
                            <option> Comarca Emberá-Wounaan </option>
                            <option> Comarca Guna Yala </option>
                            <option> Comarca Ngäbe-Buglé </option>
                    
                        </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                           <label for="codigo">Distrito</label>
                           <!--<input type="text" name="distrito" class="form-control" value="{ $centro->distrito }}">-->
                           <select class="form-control" id="sel1" name="distrito" required="">
                            <option></option>
                            
                            <optgroup label="Distritos de Panamá.">
                                <option> </option>
                                <option> </option>
                                <option> Balboa </option>
                                <option> Chepo </option>
                                <option> Chimán </option>
                                <option> Panamá </option>
                                <option> San Miguelito </option>
                                <option> Taboga </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            </optgroup>
                            <optgroup label="Distritos de Panamá Oeste.">
                                <option> </option>
                                <option> </option>
                                <option> Arraiján </option>
                                <option> Capira </option>
                                <option> Chame </option>
                                <option> La Chorrera </option>
                                <option> San Carlos </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            </optgroup>
                            <optgroup label="Distrito de la provincia de Bocas del Toro.">
                                <option> </option>
                                <option> </option>
                                <option> Almirante </option>
                                <option> Bocas del Toro </option>
                                <option> Changuinola </option>
                                <option> Chiriquí Grande </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            </optgroup>
                            <optgroup label="Distrito de chiriqui.">
                                <option> </option>
                                <option> </option>
                                <option> Alanje </option>
                                <option> Barú </option>
                                <option> Boquerón </option>
                                <option> Boquete </option>
                                <option> Bugaba </option>
                                <option> David </option>
                                <option> Dolega </option>
                                <option> Gualaca </option>
                                <option> Remedios </option>
                                <option> Renacimiento </option>
                                <option> San Félix </option>
                                <option> San Lorenzo </option>
                                <option> Tierras Altas </option>
                                <option> Tolé </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            </optgroup>
                            <optgroup label="Distritos de Coclé.">
                                <option> </option>
                                <option> </option>
                                <option> Aguadulce </option>
                                <option> Antón </option>
                                <option> La Pintada </option>
                                <option> Natá </option>
                                <option> Olá </option>
                                <option> Penonomé </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            </optgroup>
                            <optgroup label="Distritos de Colón.">
                                <option> </option>
                                <option> </option>
                                <option> Colón </option>
                                <option> Chagres </option>
                                <option> Donoso </option>
                                <option> Portobelo </option>
                                <option> Santa Isabel </option>
                                <option> Omar Torrijos Herrera </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            
                            </optgroup><optgroup label="Distritos de Darién.">
                                <option> </option>
                                <option> </option>
                                <option> Chepigana </option>
                                <option> Pinogana </option>
                                <option> Santa Fe </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            </optgroup>
                            <optgroup label="Distritos de Herrera.">
                                <option> </option>
                                <option> </option>
                                <option> Chitré </option>
                                <option> Las Minas </option>
                                <option> Los Pozos </option>
                                <option> Ocú </option>
                                <option> Parita </option>
                                <option> Pesé </option>
                                <option> Santa María </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            </optgroup>
                            <optgroup label="Distritos de Los Santos.">
                                <option> </option>
                                <option> </option>
                                <option> Guararé </option>
                                <option> Las Tablas </option>
                                <option> Los Santos </option>
                                <option> Macaracas </option>
                                <option> Pedasí </option>
                                <option> Pocrí </option>
                                <option> Tonosí </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            </optgroup>
                            
                            <optgroup label="Distritos de Veraguas.">
                                <option> </option>
                                <option> </option>
                                <option> Atalaya </option>
                                <option> Calobre </option>
                                <option> Cañazas </option>
                                <option> La Mesa </option>
                                <option> Las Palmas </option>
                                <option> Mariato </option>
                                <option> Montijo </option>
                                <option> Río de Jesús </option>
                                <option> San Francisco </option>
                                <option> Santa Fe </option>
                                <option> Santiago </option>
                                <option> Soná </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            </optgroup>
                            <optgroup label="Distritos de Emberá-Wounaan. ">
                                <option> </option>
                                <option> </option>
                                <option> Cémaco </option>
                                <option> Sambú </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            </optgroup>
                            <optgroup label="Distritos de Guna Yala.">
                                <option> </option>
                                <option> </option>
                                <option> (Ninguno) </option>
                                <option> </option>
                                <option> </option>
                                <option> </option>
                            </optgroup>
                            <optgroup label="Distritos de Ngäbe-Buglé.">
                                <option> </option>
                                <option> </option>
                                <option> Besikó </option>
                                <option> Kankintú </option>
                                <option> Kusapín </option>
                                <option> Mironó </option>
                                <option> Müna </option>
                                <option> Nole Düima </option>
                                <option> Ñürüm </option>
                                <option> Jirondai </option>
                                <option> Santa Catalina o Calovébora </option>
                            </optgroup>
                            
                        </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                           <label for="codigo">corregimiento</label>
                           <!--<input type="text" name="corregimiento" class="form-control" value="{ $centro->corregimiento }}">-->
                           <select class="form-control" id="sel1" name="corregimiento" required="">
                            <option></option>
                            Provincia de Panamá[editar]
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            Distritos de Panamá.
                    
                            Distrito Corregimientos
                            <optgroup label="Distrito de Balboa corregimiento de"></optgroup>
                            <option> La Ensenada </option>
                            <option> La Esmeralda </option>
                            <option> La Guinea </option>
                            <option> Pedro González </option>
                            <option> Saboga </option>
                            <option> San Miguel </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Chepo corregimiento de"></optgroup>
                            <option> Cañita </option>
                            <option> Chepillo </option>
                            <option> El Llano </option>
                            <option> Las Margaritas </option>
                            <option> Chepo </option>
                            <option> Santa Cruz de Chinina </option>
                            <option> Tortí </option>
                            <option> Madugandí </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Chimán corregimiento de"></optgroup>
                            <option> Brujas </option>
                            <option> Chimán </option>
                            <option> Gonzalo Vásquez </option>
                            <option> Pásiga </option>
                            <option> Unión Santeña </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Panamá corregimiento de"></optgroup>
                            <option> 24 de Diciembre </option>
                            <option> Alcalde Díaz </option>
                            <option> Ancón </option>
                            <option> Betania </option>
                            <option> Bella Vista </option>
                            <option> Calidonia </option>
                            <option> Caimitillo </option>
                            <option> Chilibre </option>
                            <option> Curundú </option>
                            <option> Don Bosco </option>
                            <option> El Chorrillo </option>
                            <option> Ernesto Córdoba Campos </option>
                            <option> Juan Díaz </option>
                            <option> Las Cumbres </option>
                            <option> Las Garzas </option>
                            <option> Las Mañanitas </option>
                            <option> Pacora </option>
                            <option> Parque Lefevre </option>
                            <option> Pedregal </option>
                            <option> Pueblo Nuevo </option>
                            <option> Río Abajo </option>
                            <option> San Felipe </option>
                            <option> San Francisco </option>
                            <option> San Martín </option>
                            <option> Santa Ana </option>
                            <option> Tocumen </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de San Miguelito corregimiento de"></optgroup>
                            <option> Amelia Denis de Icaza </option>
                            <option> Arnulfo Arias </option>
                            <option> Belisario Frías </option>
                            <option> Belisario Porras </option>
                            <option> José Domingo Espinar </option>
                            <option> Mateo Iturralde </option>
                            <option> Omar Torrijos </option>
                            <option> Rufina Alfaro </option>
                            <option> Victoriano Lorenzo </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Taboga corregimiento de"></optgroup>
                            <option> Otoque Occidente </option>
                            <option> Otoque Oriente </option>
                            <option> Taboga </option>
                            <optgroup label=""></optgroup>
                    
                    
                            Provincia de Panamá Oeste[editar]
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            Distritos de Panamá Oeste.
                    
                            Distrito Corregimientos
                            <optgroup label="Distrito de Arraiján corregimiento de"></optgroup>
                    
                            <option> Arraiján </option>
                            <option> Burunga </option>
                            <option> Cerro Silvestre </option>
                            <option> Juan Demóstenes Arosemena </option>
                            <option> Nuevo Emperador </option>
                            <option> Santa Clara </option>
                            <option> Veracruz </option>
                            <option> Vista Alegre </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Capira corregimiento de"></optgroup>
                            <option> Caimito </option>
                            <option> Campana </option>
                            <option> Capira </option>
                            <option> Cermeño </option>
                            <option> Cirí de Los Sotos </option>
                            <option> Cirí Grande </option>
                            <option> El Cacao </option>
                            <option> La Trinidad </option>
                            <option> Las Ollas Arriba </option>
                            <option> Lídice </option>
                            <option> Villa Carmen </option>
                            <option> Villa Rosario </option>
                            <option> Santa Rosa </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Chame corregimiento de"></optgroup>
                            <option> Bejuco </option>
                            <option> Buenos Aires </option>
                            <option> Cabuya </option>
                            <option> Chame </option>
                            <option> Chicá </option>
                            <option> El Líbano </option>
                            <option> Las Lajas </option>
                            <option> Nueva Gorgona </option>
                            <option> Punta Chame </option>
                            <option> Sajalices </option>
                            <option> Sorá </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de La Chorrera corregimiento de"></optgroup>
                            <option> Amador </option>
                            <option> Arosemena </option>
                            <option> Barrio Balboa </option>
                            <option> Barrio Colón </option>
                            <option> El Arado </option>
                            <option> El Coco </option>
                            <option> Feuillet </option>
                            <option> Guadalupe </option>
                            <option> Herrera </option>
                            <option> Hurtado </option>
                            <option> Iturralde </option>
                            <option> La Represa </option>
                            <option> Los Díaz </option>
                            <option> Mendoza </option>
                            <option> Obaldía </option>
                            <option> Playa Leona </option>
                            <option> Puerto Caimito </option>
                            <option> Santa Rita </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de San Carlos corregimiento de"></optgroup>
                            <option> El Espino </option>
                            <option> El Higo </option>
                            <option> Guayabito </option>
                            <option> La Ermita </option>
                            <option> La Laguna </option>
                            <option> Las Uvas </option>
                            <option> Los Llanitos </option>
                            <option> San Carlos </option>
                            <option> San José </option>
                            <optgroup label=""></optgroup>
                    
                    
                    
                            <optgroup label="Distrito de Almirante corregimiento de"></optgroup>
                            <option> Almirante </option>
                            <option> Barriada Guaymí </option>
                            <option> Barrio Francés </option>
                            <option> Nance de Riscó </option>
                            <option> Valle de Aguas Arriba </option>
                            <option> Valle de Riscó </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Bocas del Toro corregimiento de"></optgroup>
                            <option> Bastimentos </option>
                            <option> Bocas del Toro </option>
                            <option> Cauchero </option>
                            <option> Punta Laurel </option>
                            <option> Tierra Oscura </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Changuinola corregimiento de"></optgroup>
                            <option> Changuinola </option>
                            <option> Cochigro </option>
                            <option> El Empalme </option>
                            <option> Guabito </option>
                            <option> La Gloria </option>
                            <option> Las Delicias </option>
                            <option> Las Tablas </option>
                            <option> Barriada 4 de Abril </option>
                            <option> El Teribe </option>
                            <option> Finca 30 </option>
                            <option> Finca 60 </option>
                            <option> Finca 6 </option>
                            <option> El Silencio </option>
                            <optgroup label=""></optgroup>
                            <optgroup label="Distrito de Chiriquí Grande corregimiento de"></optgroup>
                            <option> Bajo Cedro </option>
                            <option> Chiriquí Grande </option>
                            <option> Miramar </option>
                            <option> Punta Peña </option>
                            <option> Punta Robalo </option>
                            <option> Rambala </option>
                    
                    
                    
                    
                    
                    
                    
                    
                            Distritos de Chiriquí.
                    
                            Distrito Corregimientos
                            <optgroup label="Distrito de Alanje corregimiento de"></optgroup>
                            <option> Alanje </option>
                            <option> Divalá </option>
                            <option> Canta Gallo </option>
                            <option> El Tejar </option>
                            <option> Guarumal </option>
                            <option> Nuevo México </option>
                            <option> Querévalo </option>
                            <option> Palo Grande </option>
                            <option> Santo Tomás </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Barú corregimiento de"></optgroup>
                            <option> Baco </option>
                            <option> Limones </option>
                            <option> Progreso </option>
                            <option> Puerto Armuelles </option>
                            <option> Rodolfo Aguilar Delgado </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Boquerón corregimiento de"></optgroup>
                            <option> Bágala </option>
                            <option> Boquerón </option>
                            <option> Cordillera </option>
                            <option> Guabal </option>
                            <option> Guayabal </option>
                            <option> Paraíso </option>
                            <option> Pedregal </option>
                            <option> Tijeras </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Boquete corregimiento de"></optgroup>
                            <option> Alto Boquete </option>
                            <option> Bajo Boquete </option>
                            <option> Caldera </option>
                            <option> Jaramillo </option>
                            <option> Los Naranjos </option>
                            <option> Palmira </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Bugaba corregimiento de"></optgroup>
                            <option> Aserrío de Gariché </option>
                            <option> Bugaba </option>
                            <option> El Bongo </option>
                            <option> Gómez </option>
                            <option> La Concepción </option>
                            <option> La Estrella </option>
                            <option> San Andrés </option>
                            <option> Santa Marta </option>
                            <option> Santa Rosa </option>
                            <option> Santo Domingo </option>
                            <option> Sortová </option>
                            <option> Solano </option>
                            <option> San Isidro </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de David corregimiento de"></optgroup>
                            <option> Bijagual </option>
                            <option> Cochea </option>
                            <option> Chiriquí </option>
                            <option> Guacá </option>
                            <option> Las Lomas </option>
                            <option> Pedregal </option>
                            <option> San Carlos </option>
                            <option> David </option>
                            <option> David Este </option>
                            <option> David Sur </option>
                            <option> San Pablo Nuevo </option>
                            <option> San Pablo Viejo </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Dolega corregimiento de"></optgroup>
                            <option> Dolega </option>
                            <option> Dos Ríos </option>
                            <option> Los Algarrobos </option>
                            <option> Los Anastacios </option>
                            <option> Potrerillos </option>
                            <option> Potrerillos Abajo </option>
                            <option> Rovira </option>
                            <option> Tinajas </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Gualaca corregimiento de"></optgroup>
                            <option> Gualaca </option>
                            <option> Hornito </option>
                            <option> Los Angeles </option>
                            <option> Paja de Sombrero </option>
                            <option> Rincón </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Remedios corregimiento de"></optgroup>
                            <option> El Nancito </option>
                            <option> El Porvenir </option>
                            <option> El Puerto </option>
                            <option> Remedios </option>
                            <option> Santa Lucía </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Renacimiento corregimiento de"></optgroup>
                            <option> Breñón </option>
                            <option> Cañas Gordas </option>
                            <option> Dominical </option>
                            <option> Monte Lirio </option>
                            <option> Plaza de Caisán </option>
                            <option> Río Sereno </option>
                            <option> Santa Cruz </option>
                            <option> Santa Clara </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de San Félix corregimiento de"></optgroup>
                            <option> Las Lajas </option>
                            <option> Lajas Adentro </option>
                            <option> Juay </option>
                            <option> San Félix </option>
                            <option> Santa Cruz </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de San Lorenzo corregimiento de"></optgroup>
                            <option> Boca Chica </option>
                            <option> Boca del Monte </option>
                            <option> Horconcitos </option>
                            <option> San Juan </option>
                            <option> San Lorenzo </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Tierras Altas corregimiento de"></optgroup>
                            <option> Volcán </option>
                            <option> Cerro Punta </option>
                            <option> Cuesta de Piedra </option>
                            <option> Nueva California </option>
                            <option> Paso Ancho </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Tolé corregimiento de"></optgroup>
                            <option> Bella Vista </option>
                            <option> Cerro Viejo </option>
                            <option> El Cristo </option>
                            <option> Justo Fidel Palacios </option>
                            <option> Lajas de Tolé </option>
                            <option> Potrero de Caña </option>
                            <option> Quebrada de Piedra </option>
                            <option> Tolé </option>
                            <option> Veladero </option>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                    
                    
                    
                            Provincia de Coclé[editar]
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            Distritos de Coclé.
                    
                            Distrito Corregimientos
                            <optgroup label="Distrito de Aguadulce corregimiento de"></optgroup>
                            <option> Aguadulce </option>
                            <option> Barrios Unidos </option>
                            <option> El Cristo </option>
                            <option> El Roble </option>
                            <option> El Hato de San Juan de Dios </option>
                            <option> Pocrí </option>
                            <option> Pueblos Unidos </option>
                            <option> Virgen del Carmen </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Antón corregimiento de"></optgroup>
                            <option> Antón </option>
                            <option> Caballero </option>
                            <option> Cabuya </option>
                            <option> El Chirú </option>
                            <option> El Retiro </option>
                            <option> El Valle </option>
                            <option> Juan Díaz </option>
                            <option> Río Hato </option>
                            <option> San Juan de Dios </option>
                            <option> Santa Rita </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de La Pintada corregimiento de"></optgroup>
                            <option> El Harino </option>
                            <option> El Potrero </option>
                            <option> La Pintada </option>
                            <option> Las Lomas </option>
                            <option> Llano Grande </option>
                            <option> Piedras Gordas </option>
                            <option> Llano Norte </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Natá corregimiento de"></optgroup>
                            <option> Capellanía </option>
                            <option> El Caño </option>
                            <option> Guzmán </option>
                            <option> Las Huacas </option>
                            <option> Natá </option>
                            <option> Toza </option>
                            <option> Villarreal </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Olá corregimiento de"></optgroup>
                            <option> El Copé </option>
                            <option> El Palmar </option>
                            <option> El Picacho </option>
                            <option> La Pava </option>
                            <option> Olá </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Penonomé corregimiento de"></optgroup>
                            <option> Cañaveral </option>
                            <option> Coclé </option>
                            <option> Chiguirí Arriba </option>
                            <option> El Coco </option>
                            <option> Pajonal </option>
                            <option> Penonomé </option>
                            <option> Río Grande </option>
                            <option> Río Indio </option>
                            <option> Toabré </option>
                            <option> Tulú </option>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                    
                    
                            Provincia de Colón[editar]
                    
                    
                    
                    
                    
                    
                    
                    
                            Distritos de Colón.
                    
                            Distrito Corregimientos
                            <optgroup label="Distrito de Colón corregimiento de"></optgroup>
                            <option> Barrio Norte </option>
                            <option> Barrio Sur </option>
                            <option> Buena Vista </option>
                            <option> Cativá </option>
                            <option> Ciricito </option>
                            <option> Cristóbal </option>
                            <option> Cristóbal Este </option>
                            <option> Escobal </option>
                            <option> Limón </option>
                            <option> Nueva Providencia </option>
                            <option> Puerto Pilón </option>
                            <option> Sabanitas </option>
                            <option> Salamanca </option>
                            <option> San Juan </option>
                            <option> Santa Rosa </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Chagres corregimiento de"></optgroup>
                            <option> Achiote </option>
                            <option> El Guabo </option>
                            <option> La Encantada </option>
                            <option> Nuevo Chagres </option>
                            <option> Palmas Bellas </option>
                            <option> Piña </option>
                            <option> Salud </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Donoso corregimiento de"></optgroup>
                            <option> Coclé del Norte </option>
                            <option> El Guásimo </option>
                            <option> Gobea </option>
                            <option> Miguel de la Borda </option>
                            <option> Río Indio </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Portobelo corregimiento de"></optgroup>
                            <option> Cacique </option>
                            <option> Garrote </option>
                            <option> Isla Grande </option>
                            <option> María Chiquita </option>
                            <option> Portobelo </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Santa Isabel corregimiento de"></optgroup>
                            <option> Cuango </option>
                            <option> Miramar </option>
                            <option> Nombre de Dios </option>
                            <option> Palenque </option>
                            <option> Palmira </option>
                            <option> Playa Chiquita </option>
                            <option> Santa Isabel </option>
                            <option> Viento Frío </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Omar Torrijos Herrera corregimiento de"></optgroup>
                            <option> San José del General </option>
                            <option> San Juan de Turbe </option>
                            <option> Nueva Esperanza </option>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                    
                    
                            Provincia del Darién[editar]
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            Distritos de Darién.
                    
                            Distrito Corregimientos
                            <optgroup label="Distrito de Chepigana corregimiento de"></optgroup>
                            <option> Camogantí </option>
                            <option> Chepigana </option>
                            <option> Garachiné </option>
                            <option> Jaqué </option>
                            <option> La Palma </option>
                            <option> Puerto Piña </option>
                            <option> Sambú </option>
                            <option> Setegantí </option>
                            <option> Taimatí </option>
                            <option> Tucutí </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Pinogana corregimiento de"></optgroup>
                            <option> Boca de Cupe </option>
                            <option> El Real de Santa María </option>
                            <option> Metetí </option>
                            <option> Paya </option>
                            <option> Pinogana </option>
                            <option> Púcuro </option>
                            <option> Yape </option>
                            <option> Yaviza </option>
                            <option> Wargandí </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Santa Fe corregimiento de"></optgroup>
                            <option> Agua Fría </option>
                            <option> Cucunatí </option>
                            <option> Río Congo </option>
                            <option> Río Congo Arriba </option>
                            <option> Río Iglesias </option>
                            <option> Santa Fe </option>
                            <option> Zapallal </option>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                    
                            Provincia de Herrera[editar]
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            Distritos de Herrera.
                    
                            Distrito Corregimientos
                            <optgroup label="Distrito de Chitré corregimiento de"></optgroup>
                            <option> Chitré </option>
                            <option> La Arena </option>
                            <option> Llano Bonito </option>
                            <option> San Juan Bautista. </option>
                            <option> Monagrillo </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Las Minas corregimiento de"></optgroup>
                            <option> Chepo </option>
                            <option> Chumical </option>
                            <option> El Toro </option>
                            <option> Las Minas </option>
                            <option> Leones </option>
                            <option> Quebrada del Rosario </option>
                            <option> Quebrada El Ciprián </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Los Pozos corregimiento de"></optgroup>
                            <option> El Capurí </option>
                            <option> El Calabacito </option>
                            <option> El Cedro </option>
                            <option> La Arena </option>
                            <option> La Pitaloza </option>
                            <option> Las Llanas </option>
                            <option> Los Cerritos </option>
                            <option> Los Cerros de Paja </option>
                            <option> Los Pozos </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Ocú corregimiento de"></optgroup>
                            <option> Cerro Largo </option>
                            <option> El Tijera </option>
                            <option> Entradero del Castillo </option>
                            <option> Los Llanos </option>
                            <option> Llano Grande </option>
                            <option> Menchaca </option>
                            <option> Peñas Chatas </option>
                            <option> Ocú </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Parita corregimiento de"></optgroup>
                            <option> Cabuya </option>
                            <option> Los Castillos </option>
                            <option> Llano de la Cruz </option>
                            <option> París </option>
                            <option> Parita </option>
                            <option> Portobelillo </option>
                            <option> Potuga </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Pesé corregimiento de"></optgroup>
                            <option> El Barrero </option>
                            <option> El Pedregoso </option>
                            <option> El Ciruelo </option>
                            <option> El Pájaro </option>
                            <option> Las Cabras </option>
                            <option> Pesé </option>
                            <option> Rincón Hondo </option>
                            <option> Sabanagrande </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Santa María corregimiento de"></optgroup>
                            <option> Chupampa </option>
                            <option> El Rincón </option>
                            <option> El Limón </option>
                            <option> Los Canelos </option>
                            <option> Santa María </option>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                    
                    
                    
                            Provincia de Los Santos[editar]
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            Distritos de Los Santos.
                    
                            Distrito Corregimientos
                            <optgroup label="Distrito de Guararé corregimiento de"></optgroup>
                            <option> El Espinal </option>
                            <option> El Hato </option>
                            <option> El Macano </option>
                            <option> Guararé </option>
                            <option> Guararé Arriba </option>
                            <option> La Enea </option>
                            <option> La Pasera </option>
                            <option> Las Trancas </option>
                            <option> Llano Abajo </option>
                            <option> Perales </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Las Tablas corregimiento de"></optgroup>
                            <option> Bajo Corral </option>
                            <option> Bayano </option>
                            <option> El Carate </option>
                            <option> El Cocal </option>
                            <option> El Manantial </option>
                            <option> El Muñoz </option>
                            <option> El Pedregoso </option>
                            <option> El Sesteadero </option>
                            <option> La Laja </option>
                            <option> La Miel </option>
                            <option> La Palma </option>
                            <option> La Tiza </option>
                            <option> Las Palmitas </option>
                            <option> Las Tablas Abajo </option>
                            <option> Nuario </option>
                            <option> Palmira </option>
                            <option> Peña Blanca </option>
                            <option> Río Hondo </option>
                            <option> San José </option>
                            <option> San Miguel </option>
                            <option> Las Tablas </option>
                            <option> Santo Domingo </option>
                            <option> Valle Rico </option>
                            <option> Vallerriquito </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Los Santos corregimiento de"></optgroup>
                            <option> El Ejido </option>
                            <option> El Guásimo </option>
                            <option> La Colorada </option>
                            <option> La Espigadilla </option>
                            <option> La Villa de Los Santos </option>
                            <option> Las Cruces </option>
                            <option> Las Guabas </option>
                            <option> Los Ángeles </option>
                            <option> Los Olivos </option>
                            <option> Llano Largo </option>
                            <option> Sabanagrande </option>
                            <option> Santa Ana </option>
                            <option> Tres Quebradas </option>
                            <option> Villa Lourdes </option>
                            <option> Agua Buena </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Macaracas corregimiento de"></optgroup>
                            <option> Bahía Honda </option>
                            <option> Bajos de Güera </option>
                            <option> Corozal </option>
                            <option> Chupá </option>
                            <option> El Cedro </option>
                            <option> Espino Amarillo </option>
                            <option> La Mesa </option>
                            <option> Las Palmas </option>
                            <option> Llano de Piedras </option>
                            <option> Macaracas </option>
                            <option> Mogollón </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Pedasí corregimiento de"></optgroup>
                            <option> Los Asientos </option>
                            <option> Mariabé </option>
                            <option> Oria Arriba </option>
                            <option> Pedasí </option>
                            <option> Purio </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Pocrí corregimiento de"></optgroup>
                            <option> El Cañafístulo </option>
                            <option> Lajamina </option>
                            <option> Paraíso </option>
                            <option> Paritilla </option>
                            <option> Pocrí </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Tonosí corregimiento de"></optgroup>
                            <option> Altos de Güera </option>
                            <option> Cambutal </option>
                            <option> Cañas </option>
                            <option> El Bebedero </option>
                            <option> El Cacao </option>
                            <option> El Cortezo </option>
                            <option> Flores </option>
                            <option> Guánico </option>
                            <option> Isla de Cañas </option>
                            <option> La Tronosa </option>
                            <option> Tonosí </option>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                    
                    
                    
                    
                            Provincia de Veraguas[editar]
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            Distritos de Veraguas.
                    
                            Distrito Corregimientos
                            <optgroup label="Distrito de Atalaya corregimiento de"></optgroup>
                            <option> Atalaya </option>
                            <option> El Barrito </option>
                            <option> La Carrillo </option>
                            <option> La Montañuela </option>
                            <option> San Antonio </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Calobre corregimiento de"></optgroup>
                            <option> Barnizal </option>
                            <option> Calobre </option>
                            <option> Chitra </option>
                            <option> El Cocla </option>
                            <option> El Potrero </option>
                            <option> La Laguna </option>
                            <option> La Raya de Calobre </option>
                            <option> La Tetilla </option>
                            <option> La Yeguada </option>
                            <option> Las Guías </option>
                            <option> Monjarás </option>
                            <option> San José </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Cañazas corregimiento de"></optgroup>
                            <option> Cañazas </option>
                            <option> Cerro de Plata </option>
                            <option> El Aromillo </option>
                            <option> El Picador </option>
                            <option> Las Cruces </option>
                            <option> Los Valles </option>
                            <option> San José </option>
                            <option> San Marcelo </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de La Mesa corregimiento de"></optgroup>
                            <option> Bisvalles </option>
                            <option> Boró </option>
                            <option> El Higo </option>
                            <option> La Mesa </option>
                            <option> Los Milagros </option>
                            <option> Llano Grande </option>
                            <option> San Bartolo </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Las Palmas corregimiento de"></optgroup>
                            <option> Cerro de Casa </option>
                            <option> Corozal </option>
                            <option> El María </option>
                            <option> El Prado </option>
                            <option> El Rincón </option>
                            <option> Las Palmas </option>
                            <option> Lolá </option>
                            <option> Manuel E. Amador Terrero </option>
                            <option> Pixvae </option>
                            <option> Puerto Vidal </option>
                            <option> San Martín de Porres </option>
                            <option> Viguí </option>
                            <option> Zapotillo </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Mariato corregimiento de"></optgroup>
                            <option> Arenas </option>
                            <option> El Cacao </option>
                            <option> Mariato </option>
                            <option> Quebro </option>
                            <option> Tebario </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Montijo corregimiento de"></optgroup>
                            <option> Cébaco </option>
                            <option> Costa Hermosa </option>
                            <option> Gobernadora </option>
                            <option> La Garceana </option>
                            <option> Leones </option>
                            <option> Montijo </option>
                            <option> Pilón </option>
                            <option> Unión del Norte </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Río de Jesús corregimiento de"></optgroup>
                            <option> Catorce de Noviembre </option>
                            <option> Río de Jesús </option>
                            <option> Las Huacas </option>
                            <option> Los Castillos </option>
                            <option> Utira </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de San Francisco corregimiento de"></optgroup>
                            <option> Corral Falso </option>
                            <option> Los Hatillos </option>
                            <option> Remance </option>
                            <option> San Francisco </option>
                            <option> San Juan </option>
                            <option> San José </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Santa Fe corregimiento de"></optgroup>
                            <option> Calovébora </option>
                            <option> El Alto </option>
                            <option> El Cuay </option>
                            <option> El Pantano </option>
                            <option> Gatuncito </option>
                            <option> Río Luis </option>
                            <option> Rubén Cantú </option>
                            <option> Santa Fe </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Santiago corregimiento de"></optgroup>
                            <option> Canto del Llano </option>
                            <option> Carlos Santana Ávila </option>
                            <option> Edwin Fábrega </option>
                            <option> La Colorada </option>
                            <option> La Peña </option>
                            <option> La Raya de Santa María </option>
                            <option> Los Algarrobos </option>
                            <option> Nuevo Santiago </option>
                            <option> Ponuga </option>
                            <option> San Martín de Porres </option>
                            <option> San Pedro del Espino </option>
                            <option> Santiago </option>
                            <option> Santiago Este </option>
                            <option> Santiago Sur </option>
                            <option> Rodrigo Luque </option>
                            <option> Urracá </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Soná corregimiento de"></optgroup>
                            <option> Bahía Honda </option>
                            <option> Calidonia </option>
                            <option> Cativé </option>
                            <option> El Marañón </option>
                            <option> Guarumal </option>
                            <option> Hicaco </option>
                            <option> La Soledad </option>
                            <option> La Trinchera </option>
                            <option> Quebrada de Oro </option>
                            <option> Río Grande </option>
                            <option> Rodeo Viejo </option>
                            <option> Soná </option>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                    
                    
                            Comarcas[editar]
                            Comarca Emberá-Wounaan[editar]
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            Distritos de Emberá-Wounaan.
                    
                            Distrito Corregimientos
                            <optgroup label="Distrito de Cémaco corregimiento de"></optgroup>
                            <option> Cirilo Guaynora </option>
                            <option> Lajas Blancas </option>
                            <option> Manuel Ortega </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Sambú corregimiento de"></optgroup>
                            <option> Jingurudó </option>
                            <option> Río Sabalo </option>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                            <optgroup label=""></optgroup>
                    
                    
                            Comarca Guna Yala[editar]
                    
                    
                    
                    
                    
                            <optgroup label="Comarca Guna Yala"></optgroup>
                    
                    
                            Distritos de Guna Yala.
                    
                            Distrito Corregimientos
                            <optgroup label="Ninguno "></optgroup>
                            <option> Ailigandí </option>
                            <option> Narganá </option>
                            <option> Puerto Obaldía </option>
                            <option> Tubualá </option>
                            <option> </option>
                            <option> </option>
                            <option> </option>
                    
                    
                            Comarca Ngäbe-Buglé[editar]
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            <optgroup label="comarca de Ngäbe-Buglé."></optgroup>
                    
                            <optgroup label="Distrito de Besikó corregimiento de"></optgroup>
                            <option> Boca de Balsa </option>
                            <option> Cerro Banco </option>
                            <option> Cerro Patena </option>
                            <option> Camarón Arriba </option>
                            <option> Emplanada de Chorcha </option>
                            <option> Nämnoní </option>
                            <option> Niba </option>
                            <option> Soloy </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Kankintú corregimiento de"></optgroup>
                            <option> Bisira </option>
                            <option> Calante </option>
                            <option> Kankintú </option>
                            <option> Guoroní </option>
                            <option> Mününí </option>
                            <option> Piedra Roja </option>
                            <option> Tolote </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Kusapín corregimiento de"></optgroup>
                            <option> Bahía Azul </option>
                            <option> Cañaveral </option>
                            <option> Kusapín </option>
                            <option> Río Chiriquí </option>
                            <option> Tobobé </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Mironó corregimiento de"></optgroup>
                            <option> Cascabel </option>
                            <option> Hato Corotú </option>
                            <option> Hato Culantro </option>
                            <option> Hato Pilón </option>
                            <option> Hato Jobo </option>
                            <option> Hato Julí </option>
                            <option> Quebrada de Loro </option>
                            <option> Salto Dupí </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Müna corregimiento de"></optgroup>
                            <option> Alto Caballero </option>
                            <option> Bakama </option>
                            <option> Cerro Caña </option>
                            <option> Cerro Puerco </option>
                            <option> Chichica </option>
                            <option> Krüa </option>
                            <option> Maraca </option>
                            <option> Nibra </option>
                            <option> Peña Blanca </option>
                            <option> Roka </option>
                            <option> Sitio Prado </option>
                            <option> Umaní </option>
                            <option> Diko </option>
                            <option> Kikari </option>
                            <option> Dikeri </option>
                            <option> Mreeni </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Nole Düima corregimiento de"></optgroup>
                            <option> Cerro Iglesias </option>
                            <option> Hato Chamí </option>
                            <option> Jädeberi </option>
                            <option> Lajero </option>
                            <option> Susama </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Ñürüm corregimiento de"></optgroup>
                            <option> Agua de Salud </option>
                            <option> Alto de Jesús </option>
                            <option> Buenos Aires </option>
                            <option> Cerro Pelado </option>
                            <option> El Bale </option>
                            <option> El Paredón </option>
                            <option> El Piro </option>
                            <option> Guayabito </option>
                            <option> Güibale </option>
                            <option> El Peñón </option>
                            <option> El Piro N°2 </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Jirondai corregimiento de"></optgroup>
                            <option> Burí </option>
                            <option> Guariviara </option>
                            <option> Man Creek </option>
                            <option> Samboa </option>
                            <option> Tuwai </option>
                            <optgroup label=""></optgroup>
                    
                            <optgroup label="Distrito de Santa Catalina o Calovébora corregimiento de"></optgroup>
                            <option> Alto Bilingüe </option>
                            <option> Loma Yuca </option>
                            <option> San Pedrito </option>
                            <option> Valle Bonito </option>
                            <option> Santa Catalina o Calovébora </option>
                         
                    
                        </select>
                        </div>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                       <label for="codigo">circuito</label>
                       <input type="text" name="cod" class="form-control">
                    </div>
                </div>
            </div>

<!--segunda columna -->

            <div class="col-xs-12 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                       <label for="codigo">Codigo de corregimiento</label>
                       <input type="text" name="cod" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                       <label for="codigo">longitud</label>
                       <input type="text" name="cod" class="form-control">
                    </div>
                </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   <label for="codigo">latitud</label>
                   <input type="text" name="cod" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   <label for="codigo">Despacho</label>
                   <input type="text" name="cod" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   <label for="codigo">Recepcion</label>
                   <input type="text" name="cod" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   <label for="codigo">Vacunacion</label>
                   <input type="text" name="cod" class="form-control">
                </div>
            </div>

            </div>


<!--tercera columna -->
            <div class="col-xs-12 col-sm-12 col-md-4" style="border: lightgrey 1px solid;">
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                       <label for="codigo">Creado</label>
                       <input type="text" name="cod" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                       <label for="codigo">Actualizado</label>
                       <input type="text" name="cod" class="form-control">
                    </div>
                </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   <label for="codigo">Borrado</label>
                   <input type="text" name="cod" class="form-control">
                </div>
            </div>
            <br><br>
            <div class="text-right">
            <button id="save" type="submit" class="btn btn-success"><i class="fas fa-save"></i>  Save</button>   
            
            <a href="/centros_vcp" class="btn btn-danger"><i class="fas fa-ban"></i>   Cancel</a>  
          </div>
        </div>
       
      
     
        
                                       
                </div>
            </div>
            </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endcan
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .columns {
  display: inline-block;
  box-sizing: border-box;
  margin: 10px;
  padding: 20px;
  -webkit-columns: 150px 3;
  -moz-columns: 150px 3;
  columns: 150px 3;
  column-fill: auto;
  column-gap: 10px;
  background: #eee;
  border-radius: 5px;
  /*font: normal 14px Verdana, Arial, Helvetica, sans-serif;*/
  font-size: 16px;
}
h4 {
  font-size: 24px;
  -webkit-column-span: all;
  column-span: all;
  margin: 5px 5px 10px;
  padding: 5px;
  border-bottom: solid 1px #666;
}
p {
  margin: 0 5px 10px;
  padding: 5px;
}
    </style>
          
@stop

@section('js')
    <script> console.log('Hi!'); </script>

    <script>
        $("#save").click(function(){
    
    Swal.fire(
  'Good job!',
  'Your work has been saved!',
  'success'
)

});
    </script>
@stop
        

