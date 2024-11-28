<?php
$equipos = (new Equipo())->equipos_completo();

/* echo "<pre>";
    print_r($personaje);
    echo "</pre>"; */

?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administracion de equipos</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">ID</th>
                        <th scope="col">Club</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Fundacion</th>
                        <th scope="col">estadio</th>                       
                    </tr>
                </thead>
                <tbody>

                <?php  foreach($equipos as $e){  ?>

                    <tr>
                        <td><img src="../img/<?=  $e->getImagen() ?>" class="img-fluid rounded" alt=""></td>
                        <th scope="row"><?=  $e->getId() ?></th>
                        <td><?=  $e->getClub() ?></td>
                        <td><?=  $e->getPais() ?></td>
                        <td><?=  $e->getFundacion() ?></td>
                        <td><?=  $e->getEstadio() ?></td>                        
                        <td>
                            <a class="btn btn-warning" href="index.php?sec=edit_equipos&id=<?= $e->getId() ?>">Editar</a>

                            <a class="btn btn-danger mt-2" href="index.php?sec=delete_equipos&id=<?= $e->getId() ?>">Eliminar</a>
                        </td>
                    </tr>

                <?php  } ?>   
                    
                </tbody>
            </table>

                    <a class="btn btn-warning mt-5" href="index.php?sec=add_equipos">Cargar Nuevo equipo</a>

        </div>
    </div>

</div>