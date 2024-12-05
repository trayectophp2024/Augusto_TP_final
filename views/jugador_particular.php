<?php

$id = $_GET['id'] ?? FALSE;

$miObjetoJugador = new Jugador();
$jugador = $miObjetoJugador->jugador_x_id($id);


?>








<div class="row my-5">

    <?php if(isset($jugador)) { ?>
      
        <h1 class="text-center mb-4"><?= $jugador->getNombres() ?> - <?= $jugador->getApellidos() ?>  </h1>
        <div class="card mb-3 mx-auto" style="max-width: 720px;">
            <div class="row g-0 align-items-center">
                <!-- Imagen del jugador -->
                <div class="col-md-4 text-center">
                    <img src="img/<?= $jugador->getImagen() ?> " alt="Jugador Destacado" class="img-fluid  p-3">
                </div>
                <!-- Información del jugador -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-success"><?= $jugador->getApodo() ?></h5>
                        <p class="text-muted mb-2"><b>Edad: </b><?= $jugador->getEdad() ?> años</p>
                        <p class="card-text"><b>Fecha de Nacimiento: </b><?= $jugador->getFecha_nacimiento() ?></p>
                        <p class="card-text"><b>Fallecimiento: </b><?= $jugador->getFallecimiento() ?></p>
                        <p class="card-text"><b>Nacionalidad : </b><?= $jugador->getNacionalidad() ?></p>
                        <ul class="list-group list-group-flush small">
                            <li class="list-group-item">Altura: <?= $jugador->getAltura() ?> metros</li>
                            <li class="list-group-item">Peso: <?= $jugador->getPeso() ?> Kgs</li>
                            <li class="list-group-item">Pie Habil: <?= $jugador->getPie_habil() ?></li>
                            <li class="list-group-item">Goles: <?= $jugador->getGoles() ?></li>
                            <li class="list-group-item">Equipo: <a href="index.php?sec=equipo_particular&id=<?= $jugador->getId_equipo() ?>"><?= $jugador->getEquipo() ?></a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center mb-4 text-danger">Posición del Jugador</h2>
        <div class="field-card mx-auto">
            <!-- Marcador de posición -->
            <div class="position-marker"><?= $jugador->getPosicion()  ?></div>
        </div>

        <?php } else { ?>
        <h2 class="text-center m-5 text-danger">No se encontro el Jugador</h2>
    
        <?php } ?>
    </div>
