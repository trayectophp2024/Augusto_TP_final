<?php

$id = $_GET['id'] ?? FALSE;

$miObjetoEquipo = new Equipo();
$equipo = $miObjetoEquipo->equipo_x_id($id);


?>

<div class="row my-5">

    <?php if(isset($equipo)) { ?>
      
        <h1 class="text-center mb-4"><?= $equipo->getClub() ?> - <?= $equipo->getPais() ?>  </h1>
        <div class="card mb-3 mx-auto" style="max-width: 720px;">
            <div class="row g-0 align-items-center">
                <!-- Imagen del equipo -->
                <div class="col-md-4 text-center">
                    <img src="img/<?= $equipo->getImagen() ?> " alt="Equipo Destacado" class="img-fluid  p-3">
                </div>
                <!-- Información del jugador -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-success"><?= $equipo->getClub() ?></h5>
                        <p class="text-muted mb-2"><b>Fecha de fundacion: </b><?= $equipo->getFundacion() ?> años</p>
                        <p class="card-text"><b>Estadio: </b><?= $equipo->getEstadio() ?></p>
                        
                        
                    </div>
                </div>
            </div>
    </div>
       

        <?php } else { ?>
        <h2 class="text-center m-5 text-danger">No se encontro el Equipo</h2>
    
        <?php } ?>
    </div>
















