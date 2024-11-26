<?php

    $id = $_GET['id'] ?? FALSE;

    $jugador = (new Jugador())->jugador_x_id($id);

?>

<div class="row my-5 g-3">
        <h1 class="text-center mb-5">¿Está seguro que desea eliminar el Jugador : <?= $jugador->getApodo() ?></h1>

        <a href="actions/delete_jugador_acc.php?id=<?= $jugador->getId() ?>" class="btn btn-danger d-block">Eliminar</a>


</div>