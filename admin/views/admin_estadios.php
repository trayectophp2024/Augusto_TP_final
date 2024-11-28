<?php

$estadios = (new Estadio())->estadios_completo();

/* echo "<pre>";
    print_r($personaje);
    echo "</pre>"; */

?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administracion de estadios</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Capacidad</th>
                        <th scope="col">Pais</th>
                                              
                    </tr>
                </thead>
                <tbody>

                <?php  foreach($estadios as $s){  ?>

                    <tr>
                        <td><img src="../img/<?=  $s->getImagen() ?>" class="img-fluid rounded" alt=""></td>
                        <th scope="row"><?=  $s->getId() ?></th>
                        <td><?=  $s->getNombre() ?></td>
                        <td><?=  $s->getCapacidad() ?></td>
                        <td><?=  $s->getPais() ?></td>
                                             
                        <td>
                            <a class="btn btn-warning" href="index.php?sec=edit_estadios&id=<?= $s->getId() ?>">Editar</a>

                            <a class="btn btn-danger mt-2" href="index.php?sec=delete_estadios&id=<?= $s->getId() ?>">Eliminar</a>
                        </td>
                    </tr>

                <?php  } ?>   
                    
                </tbody>
            </table>

                    <a class="btn btn-warning mt-5" href="index.php?sec=add_estadios">Cargar Nuevo equipo</a>

        </div>
    </div>

</div>