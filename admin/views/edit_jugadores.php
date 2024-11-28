<?php

$equipos = (new Equipo())->equipos_completo();
$posiciones =   (new Posicion())->posicion_completo();
$estados = (new Estado())->estado_completo();


$id = $_GET['id'] ?? FALSE;

$jugador = (new Jugador())->jugador_x_id($id);

?>


<div class="row -my-5">
    <div class="col">
        <h1 class="text-center mb-5">Editar Jugador</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/edit_jugador_acc.php?id=<?= $jugador->getId()  ?>" method="POST" enctype="multipart/form-data">

                <div class="col-6 mb-3">
                    <label class="form-label" for="nombres">Nombres:</label>
                    <input type="text" class="form-control" name="nombres" id="nombres" value="<?= $jugador->getNombres() ?>" required>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="apellidos">Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" id="nombre" value="<?= $jugador->getApellidos() ?>" required>
                </div>

                <div class="col-2 mb-3">
                    <label class="form-label" for="imagen">Imagen Actual:</label>
                    <img width="150px" src="../img/<?= $jugador->getImagen() ?>" alt="" class="img-fluid">
                    <input type="hidden" class="form-control" name="imagen_og" id="imagen_og" value="<?= $jugador->getImagen() ?>">
                </div>

                <div class="col-4 mb-3">
                    <label class="form-label" for="imagen">Reemplazar Imagen:</label>
                    <input type="file" class="form-control" name="imagen" id="imagen">
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="apodo">Apodo:</label>
                    <input type="text" class="form-control" name="apodo" id="apodo" required value="<?= $jugador->getApodo() ?>">

                </div>


                <div class="col-12 mb-3">
                    <label class="form-label" for="edad">Edad</label>
                    <input type="number" class="form-control" name="edad" id="edad" value="<?= $jugador->getEdad() ?>" required>

                </div>

                <div class="col-12 mb-3">
                    <label class="form-label" for="fecha_N">Fecha_nacimiento</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" value="<?= $jugador->getFecha_nacimiento() ?>" required>

                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="fallecimiento">Fallecimiento</label>
                    <input type="date" class="form-control" name="fallecio" id="fallecio" value="<?= $jugador->getFallecimiento() ?>" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="lugar">Lugar_nacimiento</label>
                    <input type="text" class="form-control" name="lugar" id="lugar" value="<?= $jugador->getLugar_nacimiento() ?>" required>

                    <br>

                    <div class="col-12 mb-3">
                        <label class="form-label" for="nacionalidad">Nacionalidad</label>
                        <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" value="<?= $jugador->getNacionalidad() ?>" required>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="alura">Altura</label>
                            <input type="number" class="form-control" name="altura" id="altura" value="<?= $jugador->getAltura() ?>" required>

                            <br>

                            <div class="col-12 mb-3">
                                <label class="form-label" for="peso">Peso</label>
                                <input type="number" class="form-control" name="peso" id="peso" value="<?= $jugador->getPeso() ?>" required>

                                <br>

                                <div class="col-12 mb-3">
                                    <label class="form-label" for="pie_habil">Pie_habil</label>
                                    <input type="text" class="form-control" name="pie_habil" id="pie_habil" value="<?= $jugador->getPie_habil() ?>" required>

                                    <br>

                                    <div class="col-12 mb-3">
                                        <label class="form-label" for="goles">Goles</label>
                                        <input type="number" class="form-control" name="goles" id="goles" value="<?= $jugador->getGoles() ?>" required>

                                        <div class="col-md-6 mb-3">
                                            <label for="id_equipo" class="form-label">Equipos</label>
                                            <select class="form-select" name="id_equipo" id="id_equipo" required>
                                                <option value="" selected disabled>Elija una opción</option>
                                                <?php foreach ($equipos as $e) {  ?>
                                                    <option value="<?= $e->getId() ?>" <?= $e->getId() == $jugador->getId_equipo() ? "selected" : ""   ?> ><?= $e->getClub() ?></option>
                                                <?php  } ?>
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="id_posicion" class="form-label">Posicion</label>
                                            <select class="form-select" name="id_posicion" id="id_posicion" required>
                                                <option value="" selected disabled>Elija una opción</option>
                                                <?php foreach ($posiciones as $p) {  ?>
                                                    <option value="<?= $p->getId() ?>"  <?= $p->getId() == $jugador->getId_posicion() ? "selected" : ""   ?>><?= $p->getLugar() ?></option>
                                                <?php  } ?>
                                            </select>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <label for="id_estado" class="form-label">Estado</label>
                                            <select class="form-select" name="id_estado" id="id_estado" required>
                                                <option value="" selected disabled>Elija una opción</option>
                                                <?php foreach ($estados as $e) {  ?>
                                                    <option value="<?= $e->getId() ?>" <?= $e->getId() == $jugador->getId_estado() ? "selected" : ""   ?>><?= $e->getSituacion() ?></option>
                                                <?php  } ?>
                                            </select>
                                        </div>


                                        <button type="submit" class="btn btn-success">Editar Jugador </button>




            </form>
        </div>
    </div>
</div>