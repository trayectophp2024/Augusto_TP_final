<?php
    $id = $_GET['id'] ?? FALSE;

    $estadio = (new Estadio())->estadio_x_id($id);

?>


<div class="row -my-5">
    <div class="col">
            <h1 class="text-center mb-5">Editar Estadio</h1>

            <div class="row mb-5 d-flex align-items-center">
                  <form class="row g-3" action="actions/edit_estadio_acc.php?id=<?= $equipo->getId()  ?>"  method="POST" enctype="multipart/form-data">

                        <div class="col-6 mb-3">
                            <label class="form-label" for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $estdio->getNombre() ?>"  required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="fundacion">Capacidad:</label>
                            <input type="date" class="form-control" name="capacidad" id="capacidad" value="<?= $estadio->getFundacion() ?>" required>
                        </div>

                        <div class="col-2 mb-3">
                            <label class="form-label" for="imagen">Imagen Actual:</label>
                            <img width="150px" src="../img/<?= $estadio->getImagen() ?>" alt="" class="img-fluid">
                            <input type="hidden" class="form-control" name="imagen_og" id="imagen_og" value="<?= $estadio->getImagen() ?>">
                        </div>

                        <div class="col-4 mb-3">
                            <label class="form-label" for="imagen">Reemplazar Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="pais">pais:</label>
                            <input type="text" class="form-control" name="pais" id="text" required  value="<?= $estadio->getPais() ?>">
                            
                        </div>             
                        

                            

                           


                        <button type="submit" class="btn btn-success">Editar Estadio </button>

                        


                </form>  
            </div>
    </div>
</div>