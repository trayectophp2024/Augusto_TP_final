<?php
    $options = [
        "fan" => "Fan",
        "conocimiento" => "Conocimiento",
        "agregar_datos" => "Agregar_Datos",
    ]

    


?>

<section class="container p-5 mb-3 rounded" style="background-color: #AF1740;">
        <h1 class="text-center text-warning">Suscribite</h1>
        
        <div class="col-6 mx-auto">
             <form action="datos/procesar_datos.php" method="POST">
                    <div class="mb-3">
                        <label class="mb-3 form-label text-white" for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label class="mb-3 form-label text-white" for="apellido">Apellido</label>
                        <input class="form-control" type="text" name="apellido" id="apellido" required>
                    </div>

                    <div class="mb-3">
                        <label class="mb-3 form-label text-white" for="correo">Email</label>
                        <input class="form-control" type="email" name="correo" id="correo" required>
                    </div>

                    <p class="text-white">Motivo de suscripcion:</p>

                    <?php foreach ($options as $key => $value) { ?>
                            <div class="mb-3">
                                <input type="radio" name="consulta[]" value="<?= $key ?>" >
                                <label class="text-white" for=""><?= $value?></label>

                            </div>
                    <?php } ?>  

                    
                    
                    <div class="text-center">
                        <input class="btn btn-dark" type="submit" value="Enviar">
                    </div>
                    <br>

                    



             </form>
        </div>

        <img class="d-block mx-auto" width="80%" src="img/banner.jpg" alt="banner">
</section>

