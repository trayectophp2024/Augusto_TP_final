<?php
     require_once "../../functions/autoload.php";

    $postData = $_POST;
    $fileData= $_FILES['imagen'] ?? FALSE;
    $id = $_GET['id'] ?? false;

    /* echo "<pre>";
    print_r($postData);
    echo "</pre>"; */

   try {
          $jugador = new Jugador();

          if(!empty($fileData['tmp_name'])){
               if(!empty($postData['imagen_og'])){
                   (new Imagen())->borrarImagen(__DIR__ . "/../../img/" . $postData['imagen_og'] ); 
               }
              $imagen =  (new Imagen())->subirImagen(__DIR__ . "/../../img" , $fileData);

              $jugador->reemplazar_imagen($imagen , $id);
 
          }




          $jugador->edit(
            $postData['nombres'],
            $postData['apellidos'],
            $postData['apodo'],
            $postData['edad'],
            $postData['fecha'],
            $postData['fallecio'],
            $postData['lugar'],
            $postData['nacionalidad'],
            $postData['altura'],
            $postData['peso'],
            $postData['pie_habil'],
            $postData['goles'],
            $postData['id_equipo'],
            $postData['id_posicion'],
            $postData['id_estado'],
            $id ); 

         header('Location: ../index.php?sec=admin_jugadores'); 
    } catch (\Exception  $e) {
         die("No se pudo cargar el Jugador . $e");        
    }


   



   

?>