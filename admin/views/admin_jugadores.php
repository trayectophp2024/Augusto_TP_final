<?php
$jugadores = (new Jugador())->jugadores_completo();

/* echo "<pre>";
    print_r($personaje);
    echo "</pre>"; */

?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administracion de Jugadores</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Apodo</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Fecha_nacimiento</th>
                        <th scope="col">Fallecimiento</th>
                        <th scope="col">Lugar_nacimiento</th>
                        <th scope="col">Nacionalidad</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Pie_habil</th>
                        <th scope="col">Goles</th>
                    </tr>
                </thead>
                <tbody>

                <?php  foreach($jugadores as $j){  ?>

                    <tr>
                        <td><img src="../img/<?=  $j->getImagen() ?>" class="img-fluid rounded" alt=""></td>
                        <th scope="row"><?=  $j->getId() ?></th>
                        <td><?=  $j->getNombres() ?></td>
                        <td><?=  $j->getApellidos() ?></td>
                        <td><?=  $j->getApodo() ?></td>
                        <td><?=  $j->getEdad() ?></td>
                        <td><?=  $j->getFecha_nacimiento() ?></td>
                        <td><?=  $j->getFallecimiento() ?></td>
                        <td><?=  $j->getLugar_nacimiento() ?></td>
                        <td><?=  $j->getNacionalidad() ?></td>
                        <td><?=  $j->getAltura() ?></td>
                        <td><?=  $j->getPeso() ?></td>
                        <td><?=  $j->getPie_habil() ?></td>
                        <td><?=  $j->getGoles() ?></td>
                        <td>
                            <a class="btn btn-warning" href="index.php?sec=edit_jugadores&id=<?= $j->getId() ?>">Editar</a>

                            <a class="btn btn-danger mt-2" href="index.php?sec=delete_jugadores&id=<?= $j->getId() ?>">Eliminar</a>
                        </td>
                    </tr>

                <?php  } ?>   
                    
                </tbody>
            </table>

                    <a class="btn btn-primary mt-5" href="index.php?sec=add_jugadores">Cargar Nuevo Jugador</a>

        </div>
    </div>

</div>