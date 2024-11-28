<?php

    $id = $_GET['id'] ?? FALSE;

    $equipo = (new Equipo())->equipo_x_id($id);

?>

<div class="row my-5 g-3">
        <h1 class="text-center mb-5">¿Está seguro que desea eliminar este Equipo : <?= $jugador->getClub() ?></h1>

        <a href="actions/delete_equipo_acc.php?id=<?= $equipo->getId() ?>" class="btn btn-danger d-block">Eliminar</a>


</div>