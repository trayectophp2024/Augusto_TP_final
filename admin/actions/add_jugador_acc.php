<?php
    require_once "../../functions/autoload.php";


    $postData = $_POST;
    $fileData = $_FILES['imagen'];

    

  


   try {

        $jugador = new Jugador();

        $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/", $fileData );


         $jugador->insert(
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
            $imagen,
            $postData['id_equipo'],
            $postData['id_posicion'],
            $postData['id_estado'],
           
        );

        (new Alerta())->add_alerta("success" , "El jugador se cargo correctamente");



        

         header('Location: ../index.php?sec=admin_jugadores'); 
    } catch (\Exception  $e) {
         die("No se pudo cargar el Personaje . $e");        
    }


   



   

?>