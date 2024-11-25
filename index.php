<?php

//incluir las clases 
require_once "functions/autoload.php";


$secciones_validas = [
    "home" => [
        "titulo" => "Bienvenidos"
    ],
    "nosotros" => [
        "titulo" => "Nosotros"
    ],
    "info" => [
        "titulo" => "lista de futbol"
    ],
    "jugadores" => [
        "titulo" => "Todos los Jugadores"
    ],
    
    "jugador_particular" => [
        "titulo" => "Jugador Particular"
    ],

    "equipos" => [
        "titulo" => "Equipos de futbol"
    ],
    "estadios" => [
        "titulo" => "Todos los Estadios"
    ],
    "contacto" => [
        "titulo" => "Contacto"
    ]

];





$seccion = $_GET['sec'] ?? "home";


/* Buscar si existe los que viene por sec , y si esta en el array secciones_validas  */

if (!array_key_exists($seccion, $secciones_validas)) {
    $vista = "404";
    $titulo = "404 - pagina no encontrada";
} else {
    $vista = $seccion;
    $titulo = $secciones_validas[$seccion]['titulo'];
}













?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ultra Futbol :: <?= $titulo  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">

    <!-- CDN ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Navegacion -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">


            <a href="index.php?sec=home" class="titulo-principal">
                <img width="100px" height="100px" src="img/logo.jpg" alt="">
                <h1 class="text-">Ultra Futbol</h1>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?sec=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?sec=nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?sec=jugadores">Jugadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?sec=estadios">Estadios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?sec=equipos">Equipos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?sec=contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <?php
        require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php"
        ?>
    </main>

    <footer class="bg-secondary">
        <p class="text-light text-center p-4">Todos los derechos reservados - 2024 - CFP20</p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>