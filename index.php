<?php

function generarDatos($fecha)
{
  return [
    [$fecha, '10:50 am', 'Terraza 1',  rand(17, 22), rand(76, 78), rand(376, 390)],
    [$fecha, '11:00 am', 'Terraza 1',  rand(17, 22), rand(76, 78), rand(376, 390)],
    [$fecha, '11:10 am', 'Terraza 1',  rand(17, 22), rand(76, 78), rand(376, 390)],
    [$fecha, '11:20 am', 'Terraza 1',  rand(17, 22), rand(76, 78), rand(400, 600)],
    [$fecha, '11:30 am', 'Terraza 1',  rand(17, 22), rand(76, 78), rand(750, 800)],
  ];
}

$datos = array_merge([], generarDatos('2022-05-13'));
?>

<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>mq135</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/fonts/fa/css/all.min.css" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- App -->
  <link rel="stylesheet" href="css/custom.css" />
</head>

<body style="background-image: url('img/fondo.jpg'); background-size: cover;">
  <!-- Start your project here-->

  <section style="cursor: default;">
    <div class="container pt-5">

      <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-6">

          <div class="card" style="color: #4B515D; border-radius: 35px;">
            <div class="card-body p-4">

              <div class="d-flex justify-content-center">
                <!-- <h6 class="flex-grow-1">Parquedero UCC</h6> -->
                <h6>Calidad del Aire</h6>
              </div>

              <div class="d-flex flex-column text-center mt-2 mb-0">
                <h6 class="display-4 mb-0 font-weight-bold text-success" style="color: #1C2331;"> Bueno </h6>
                <!-- <h6 class="display-4 mb-0 font-weight-bold text-warning" style="color: #1C2331;"> Regular </h6> -->
                <!-- <h6 class="display-4 mb-0 font-weight-bold text-danger" style="color: #1C2331;"> Peligroso </h6> -->
                <span class="small" style="color: #868B94"><strong>750 ppm</strong></span>
              </div>

              <div class="d-flex align-items-center">
                <div class="flex-grow-1" style="font-size: 1rem;">
                  <div title="Ubicación">
                    <i class="fas fa-map-location-dot fa-fw" style="color: #868B94;"></i>
                    <span class="ms-2">Terraza 1</span>
                  </div>
                  <div>
                    <i class="fas fa-calendar-day fa-fw" style="color: #868B94;"></i>
                    <span class="ms-2">2022-05-13 4:20 pm</span>
                  </div>
                  <div>
                    <i class="fas fa-temperature-high fa-fw" style="color: #868B94;"></i>
                    <span class="ms-2"> 19 °C</span>
                  </div>
                  <div>
                    <i class="fas fa-tint fa-fw" style="color: #868B94;"></i>
                    <span class="ms-2"> 76 </span>
                  </div>
                </div>
                <div class="d-none d-md-block">
                  <img src="img/earth-wait.gif" width="150px">
                </div>
              </div>

            </div>
          </div>

        </div>

        <div class="col-12 pt-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Últimas lecturas</h5>
              <small class="text-muted">A continuación se muestran las últimas 15 lecturas registradas.</small>
              <div class="table-responsive mt-2">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Fecha</th>
                      <th scope="col">Hora</th>
                      <th scope="col">Lugar</th>
                      <th scope="col">Temperatura</th>
                      <th scope="col">Humedad</th>
                      <th scope="col">PPM</th>
                      <th scope="col">Resultado</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($datos as $dato) : ?>
                      <tr>
                        <th><?php echo $dato[0] ?></th>
                        <td><?php echo $dato[1] ?></td>
                        <td><?php echo $dato[2] ?></td>
                        <td><?php echo $dato[3] ?>°C</td>
                        <td><?php echo $dato[4] ?></td>
                        <td><?php echo $dato[5] ?></td>
                        <?php if ($dato[5] < 750) : ?>
                          <td><span class="text-success"><strong>Bueno</strong></span></td>
                        <?php elseif ($dato[5] > 750 && $dato[5] < 1200) : ?>
                          <td><span class="text-warning"><strong>Regular</strong></span></td>
                        <?php else : ?>
                          <td><span class="text-danger"><strong>Peligroso</strong></span></td>
                        <?php endif ?>
                      </tr>
                    <?php endforeach ?>

                  </tbody>
                </table>
              </div>

              <div class="d-grid gap-2 mt-3">
                <a class="btn btn-info" href="historico.php">Ver historico</a>
              </div>

            </div>
          </div>

        </div>


        <div class="col-12 pt-4 text-center">
          <p class="m-0">Trabajo proyecto Aspectos Ambientales - Medidor calidad de aire</p>
          <p class="m-0">Universidad Cooperativa de Colombia</p>
          <p class="m-0">2022</p>
        </div>

      </div>

    </div>
  </section>

  <button type="button" class="btn btn-white btn-lg btn-floating flotante" data-mdb-toggle="modal" data-mdb-target="#modalAyuda">
    <i class="fas fa-question"></i>
  </button>


  <!-- Modal -->
  <div class="modal fade" id="modalAyuda" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ayuda / Creditos</h5>
        </div>
        <div class="modal-body">
          <div>
            <p>Indicaciones: </p>
            <p class="text-success">Menor a 750ppm <b>BUENO</b> para humano </p>
            <p class="text-warning">750ppm - 1200ppm <b>REGULAR</b> para el humano</p>
            <p class="text-danger">1200ppm - o mas <b>PELIGROSO</b> para el humano</p>
          </div>
          <hr>
          <div class="pt-2">
            <i>
              <p>Universidad Cooperativa de Colombia</p>
              <p>Aspectos Ambientales </p>
            </i>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-mdb-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>