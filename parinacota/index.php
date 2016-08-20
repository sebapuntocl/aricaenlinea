<?php   
include '../assets/php/menu.php';
 ?>
  <head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/index.js"></script>
 </head>
    <div class="container">

        <div class="row">

            <div class="col-md-3">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-primary">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" class="active"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                            ...... <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#vtab2" data-toggle="tab" class="list-group-item">.....</a>
                                <a href="#vtab3" data-toggle="tab" class="list-group-item">.....</a>
                                <a href="#vtab4" data-toggle="tab" class="list-group-item">.....</a>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="panel panel-primary">
                    <div class="panel-heading" role="tab" id="headingfor">
                        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefor" aria-expanded="false" aria-controls="collapsefor">
              Hoteles <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
            </a>
          </h4>
                    </div>
                    <div id="collapsefor" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#vtab25" data-toggle="tab" class="list-group-item"> <span class=""></span>Hoteles</a>
                                <a href="#vtab26" data-toggle="tab" class="list-group-item"> <span class=""></span>Hostales Y Residenciales</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-9">
                <div class="row">
                <div class="tab-content">

                <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                
                  <p> La Provincia de Parinacota fue creada el año 1979. Las razones de su creación obedecieron principalmente a factores geopolíticos y de descentralización respecto a las Provincias de Arica e Iquique. Esta provincia comparte dos fronteras: por el norte con Perú, y por el Este, con Bolivia. Cuenta con una superficie de 815.345 Hás. y en ella viven 3.587 habitantes, 2.582 en la Comuna de Putre y 1.005 en la Comuna de General Lagos.</p>
                  <p>La geomorfología y el clima son propios del paisaje puneño, donde es visible la presencia de dos pisos ecológicos claramente diferenciados: el altiplano, sobre 4.000 metros de altura, y los valles de la precordillera, entre los 2.500 y 4.000 metros de altura.</p>
                  <p>Las bellezas escénicas de la Provincia están representadas por los Volcanes Parinacota y Pomerape, el Lago Chungará, las ciénagas de Caquena y Parinacota, los Volcanes de Allatire, Taapaca y Tacora. Además se pueden visitar las Quebradas de Allane, Japu, las Termas de Jurasi, Las Cuevas, Tacora y Polloquere.</p>
                  <p>Parinacota y sus comunas de General Lagos y Putre, constituyen la expresión de la identidad cultural andina, un territorio rico en recursos hídricos, donde se cobija una fauna única en Chile: llamas, alpacas, vicuñas, guanacos, venados, pumas, parinas, cóndores, águilas, vizcachas, avestruces y una gran cantidad de otras aves y roedores. Lo mismo sucede con la flora, donde podemos distinguir la queñoa, el cactus candelabro, la llareta y otras especies únicas en el país.</p>
                  <p>El paisaje puneño es producto de la biota Puna, un territorio compartido entre Perú, Chile, Bolivia y Norte Argentino. Su componente étnico es mayoritariamente de origen aymará, lo que constituye una fortaleza desde el punto de vista de las tradiciones, folklore, cultura, gastronomía y costumbres ancestrales.</p>
                  <p>El sincretismo religioso y la fusión entre las culturas hispánicas y aymaras, ha dado origen a un paisaje vernacular que se manifiesta en la presencia tutelar de una variedad infinita de iglesias que le proporciona al turista una visión particular de su territorio. </p>


                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab2">
                <img src="img/ARICA56.JPG" class="img-responsive" alt="Imagen responsive">
                    <h3>Los cactus candelabro</h3>
                  <p>A 34 Km. de Arica por la Ruta A-35, existe un mirador, en el cual se puede apreciar esta variedad de cactus.</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab3">
                <img src="img/ARICA56.JPG" class="img-responsive" alt="Imagen responsive">
                    <h3>Codpa </h3>
                  <p>Situadaa 114 Km. de Arica, a 1900 msnm. Se ubica en lo alto del río Vítor, se abastece de aguas puras y sus terrenos producen, paltas, guayabas, membrillos y uvas codpeñas, que crean el vino “pintatani”.</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab4">
                <img src="img/ARICA56.JPG" class="img-responsive" alt="Imagen responsive">
                    <h3>La Iglesia San Martín de Tours</h3>
                  <p>Importante centro misional durante la Colonia. Data de 1668, es una de las iglesias más antiguas de la zona de estilo colonial, construida en adobe con un altar repleto de imágenes de la época. </p>
                </div>
                
        <!--HOTELES-->
                <div role="tabpanel" class="tab-pane fade in " id="vtab25">
                <div class="container">
                <div class="row">
                    <div class="col-md-3">
                     <form action="#" method="get">
                            <div class="input-group">
                                <input class="form-control" id="system-search" name="q" placeholder="Buscar por palabras claves:" required>
                             <span class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                             </span>
                            </div>
                        </form>
                    </div>
                <div class="col-md-12">
                 <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Sitio web</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Apart Hotel Tiwanaku</td>
                            <td>Raúl Pey Casado 3059</td>
                            <td>58-2211539</td>
                            <td>www.tiwanaku.cl</td>
                            <td>hoteleratiwanaku@entelchile.net</td>
                        </tr>
                        <tr>
                            <td>Hotel Amaru</td>
                            <td>Sotomayor 490</td>
                            <td>58-2224444</td>
                            <td>www.hotelamaru.cl </td>
                            <td>hotel_amaru@hotmail.com</td>
                        </tr>
                        <tr>
                            <td>Chinchorro Suite</td>
                            <td>Avenida Luis Beretta Porcel 2948</td>
                            <td>58-2325678</td>
                            <td>www.chinchorrosuite.cl</td>
                            <td>chinchorrosuite@gmail.com</td>
                        </tr>
                    </tbody>
                </table>   
              </div>
            </div>
            </div>
            </div>
        <!--HOSTALES Y RESIDENCIALES -->
                <div role="tabpanel" class="tab-pane fade in " id="vtab26">
                <div class="container">
                <div class="row">
                    <div class="col-md-3">
                     <form action="#" method="get">
                            <div class="input-group">
                                <input class="form-control" id="system-search" name="q" placeholder="Buscar por palabras claves:" required>
                             <span class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                             </span>
                            </div>
                        </form>
                    </div>
                <div class="col-md-12">
                 <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Sitio web</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2Apart Hotel Tiwanaku</td>
                            <td>Raúl Pey Casado 3059</td>
                            <td>58-2211539</td>
                            <td>www.tiwanaku.cl</td>
                            <td>hoteleratiwanaku@entelchile.net</td>
                        </tr>
                        <tr>
                            <td>Hotel Amaru</td>
                            <td>Sotomayor 490</td>
                            <td>58-2224444</td>
                            <td>www.hotelamaru.cl </td>
                            <td>hotel_amaru@hotmail.com</td>
                        </tr>
                        <tr>
                            <td>Chinchorro Suite</td>
                            <td>Avenida Luis Beretta Porcel 2948</td>
                            <td>58-2325678</td>
                            <td>www.chinchorrosuite.cl</td>
                            <td>chinchorrosuite@gmail.com</td>
                        </tr>
                    </tbody>
                </table>   
              </div>
            </div>
            </div>
            </div>







            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->