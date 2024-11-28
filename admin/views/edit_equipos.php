<?php
    $id = $_GET['id'] ?? FALSE;

    $equipo = (new Equipo())->equipo_x_id($id);

?>


<div class="row -my-5">
    <div class="col">
            <h1 class="text-center mb-5">Editar Equipo</h1>

            <div class="row mb-5 d-flex align-items-center">
                  <form class="row g-3" action="actions/edit_equipo_acc.php?id=<?= $equipo->getId()  ?>"  method="POST" enctype="multipart/form-data">

                        <div class="col-6 mb-3">
                            <label class="form-label" for="club">Club:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $equipo->getClub() ?>"  required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="pais">Pais:</label>
                            <input type="text" class="form-control" name="pais" id="nombre" value="<?= $equipo->getPais() ?>" required>
                        </div>

                        <div class="col-2 mb-3">
                            <label class="form-label" for="imagen">Imagen Actual:</label>
                            <img width="150px" src="../img/<?= $equipo->getImagen() ?>" alt="" class="img-fluid">
                            <input type="hidden" class="form-control" name="imagen_og" id="imagen_og" value="<?= $equipo->getImagen() ?>">
                        </div>

                        <div class="col-4 mb-3">
                            <label class="form-label" for="imagen">Reemplazar Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="fundacion">Fundacion:</label>
                            <input type="date" class="form-control" name="fundacion" id="fundacion" required  value="<?= $equipo->getFundacion() ?>">
                            
                        </div>

                        
                        <div class="col-12 mb-3">
                            <label class="form-label" for="estadio">Esadio</label>
                            <input type="text" class="form-control" name="estadio" id="estadio" value="<?= $equipo->getEstadio() ?>"  required>
                            
                        </div>                     
                        

                            

                           


                        <button type="submit" class="btn btn-success">Editar Equipo </button>

                        


                </form>  
            </div>
    </div>
</div>