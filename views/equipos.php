<?php

$miObjetoEquipos = new Equipo();

$equipos = $miObjetoEquipos->equipos_completo();

?>


<div class="container my-4">
    <h1 class="text-center mb-4">Equipos</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Card 1 -->

        <?php if (count($equipos)) {   ?>
            <?php foreach ($equipos as $equipo) { ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/<?= $equipo->getImagen() ?>" class="card-img-top" alt="Equipo 1">
                        <div class="card-body">
                            <h5 class="card-title"><?= $equipo->getClub() ?></h5>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-success">Ver más</a>
                        </div>
                    </div>
                </div>

            <?php } ?>

        <?php } else { ?>
            <div class="col-12">
                <h2 class="text-center text-danger mb-5">No se encontraron Equipos</h2>
            </div>
        <?php } ?>



    </div>
</div>
</div>