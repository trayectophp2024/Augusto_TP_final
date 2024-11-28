<?php

$id = $_GET['id'] ?? FALSE;

$miObjetoEstadio = new Estadio();
$estadio = $miObjetoEstadio->estadio_x_id($id);


?>

<div class="row my-5">

    <?php if(isset($estadio)) { ?>
      
        <h1 class="text-center mb-4"><?= $estadio->getNombre() ?> - <?= $estadio->getPais() ?>  </h1>
        <div class="card mb-3 mx-auto" style="max-width: 720px;">
            <div class="row g-0 align-items-center">
                <!-- Imagen del equipo -->
                <div class="col-md-4 text-center">
                    <img src="img/<?= $estadio->getImagen() ?> " alt="Estadio Destacado" class="img-fluid  p-3">
                </div>
                <!-- Información del estadio -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-success"><?= $estadio->getNombre() ?></h5>
                        <p class="text-muted mb-2"><b>Capacidad: </b><?= $estadio->getCapacidad() ?> Personas</p>
                        <p class="card-text"><b>Pais: </b><?= $estadio->getPais() ?></p>
                        
                        
                    </div>
                </div>
            </div>
    </div>
       

        <?php } else { ?>
        <h2 class="text-center m-5 text-danger">No se encontro el Estadio</h2>
    
        <?php } ?>
    </div>
















