<?php
$miObjetoJugador = new Jugador();

$jugadores = $miObjetoJugador->jugadores_completo();
?>



<div class="container my-4">
    <h1 class="text-center mb-4">Jugadores</h1>
    <div class="row row-cols-2 row-cols-md-4 g-3">


        <?php if (count($jugadores)) {   ?>
            <?php foreach ($jugadores as $jugador) { ?>
                <div class="col">
                    <div class="card h-100 text-center">
                        <img src="img/<?= $jugador->getImagen() ?>" class="card-img-top rounded-circle mx-auto mt-3" alt="Jugador 1" style="width: 100px; height: 100px;">
                        <div class="card-body">
                            <h6 class="card-title mb-1"><b> Nombres : </b><?= $jugador->getNombres() ?></h6>
                            <p class="card-title mb-1"><b> Apellidos : </b><?= $jugador->getApellidos() ?></p>

                        </div>
                        <div class="card-footer">
                            <a href="index.php?sec=jugador_particular&id=<?= $jugador->getId() ?>" class="btn btn-success">Ver más</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="col-12">
                <h2 class="text-center text-danger mb-5">No se encontraron Jugadores</h2>
            </div>
        <?php } ?>



    </div>
</div>