<div class="row -my-5">
    <div class="col">
            <h1 class="text-center mb-5">Agregar Nuevo Equipo</h1>

            <div class="row mb-5 d-flex align-items-center">
                  <form class="row g-3" action="actions/add_equipo_acc.php"  method="POST" enctype="multipart/form-data">

                        <div class="col-6 mb-3">
                            <label class="form-label" for="club">Club:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"  required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="pais">Pais:</label>
                            <input type="text" class="form-control" name="pais" id="nombre" required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="imagen">Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="fundacion">Fundacion:</label>
                            <input type="date" class="form-control" name="fundacion" id="fundacion" required>
                        </div>

                        
                        <div class="col-12 mb-3">
                            <label class="form-label" for="estadio">Estadio:</label>
                            <input type="text" class="form-control" name="estadio" id="estadio"  required>
                            
                        </div>                      
                       
                        


                        <button type="submit" class="btn btn-warning">Cargar Personaje</button>

                        


                </form>  
            </div>
    </div>
</div>