<?php

$miObjetoEstadios = new Estadio();

$estadios = $miObjetoEstadios->estadios_completo();

?>


<div class="container my-4">
    <h1 class="text-center mb-4">Estadios</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Card 1 -->

        <?php if (count($estadios)) {   ?>
            <?php foreach ($estadios as $estadio) { ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/<?= $estadio->getImagen() ?>" class="card-img-top" alt="Estadio 1">
                        <div class="card-body">
                            <h5 class="card-title"><?= $estadio->getNombre() ?></h5>
                        </div>
                        <div class="card-footer">
                         <a href="index.php?sec=estadio_particular&id=<?= $estadio->getId() ?>" class="btn btn-success">Ver más</a>
                        </div>
                    </div>
                </div>

            <?php } ?>

        <?php } else { ?>
            <div class="col-12">
                <h2 class="text-center text-danger mb-5">No se encontraron Estadios</h2>
            </div>
        <?php } ?>



    </div>
</div>
</div>