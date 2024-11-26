<div class="row -my-5">
    <div class="col">
            <h1 class="text-center mb-5">Agregar Nuevo Jugador</h1>

            <div class="row mb-5 d-flex align-items-center">
                  <form class="row g-3" action="actions/add_jugador_acc.php"  method="POST" enctype="multipart/form-data">

                        <div class="col-6 mb-3">
                            <label class="form-label" for="nombres">Nombres:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"  required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="apellidos">Apellidos:</label>
                            <input type="text" class="form-control" name="apellidos" id="nombre" required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="imagen">Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="apodo">Apodo:</label>
                            <input type="text" class="form-control" name="apodo" id="nombre" required>
                        </div>

                        
                        <div class="col-12 mb-3">
                            <label class="form-label" for="edad">Edad:</label>
                            <input type="number" class="form-control" name="edad" id="edad"  required>
                            
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="fecha_N">Fecha_nacimiento</label>
                          <input type="date" class="form-control" name="nacio" id="nacio" required>
                          
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="fallecimiento">Fallecimiento</label>
                           <input type="date" class="form-control" name="fallecio" id="fallecio" required>
                          
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="lugar_N">Lugar_nacimiento</label>
                            <input type="text" class="form-control" name="lugar" id="lugar">
                          
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="nacionalidad">Nacionalidad</label>
                            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad">
                          
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="altura">Altura</label>
                            <input type="number" class="form-control" name="altura" id="altura">
                          
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="peso">Peso</label>
                            <input type="number" class="form-control" name="peso" id="peso">
                          
                        </div>
                         <div class="col-12 mb-3">
                            <label class="form-label" for="pie_habil">Pie_habil</label>
                            <input type="text" class="form-control" name="pie_habil" id="nombre">
                          
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="goles">Goles</label>
                            <input type="number" class="form-control" name="cantidad" id="cantidad">
                          
                        </div>


                        <button type="submit" class="btn btn-warning">Cargar Personaje</button>

                        


                </form>  
            </div>
    </div>
</div>