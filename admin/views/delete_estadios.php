<?php

    $id = $_GET['id'] ?? FALSE;

    $estadio = (new Estadio())->estadio_x_id($id);

?>

<div class="row my-5 g-3">
        <h1 class="text-center mb-5">¿Está seguro que desea eliminar este Estadio : <?= $jugador->getNombre() ?></h1>

        <a href="actions/delete_estadio_acc.php?id=<?= $estadio->getId() ?>" class="btn btn-danger d-block">Eliminar</a>


</div>