<?php

    require_once "../../functions/autoload.php";
   



    $id = $_GET['id'] ?? FALSE;

    
    $jugador  = (new Jugador())->jugador_x_id($id);








    try {

       if(!empty($jugador->getImagen())){
             (new Imagen())->borrarImagen(__DIR__ . "/../../img/" . $jugador->getImagen());
          }

          $jugador->delete();

         
            header("Location: ../index.php?sec=admin_jugadores");
    } catch (\Exception $e) {
        die("No se pudo eliminar el Jugador".  $e);
    }




?>