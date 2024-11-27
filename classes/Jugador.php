<?php

 class Jugador {
     protected $id;
     protected $nombres;
     protected $apellidos;
     protected $apodo;
     protected $edad;
     protected $fecha_nacimiento;
     protected $fallecimiento;
     protected $lugar_nacimiento;
     protected $nacionalidad;
     protected $altura;
     protected $peso;
     protected $pie_habil;
     protected $goles;
     protected $imagen;
     protected $id_equipo;
     protected $id_posicion ;
     protected $id_estado;



     public function insert($nombres, $apellidos, $apodo, $edad, $fecha_nacimiento, $fallecimiento, $lugar_nacimiento, $nacionalidad, $altura, $peso, $pie_habil, $goles, $imagen, $id_equipo, $id_posicion, $id_estado) {

          $conexion = (new Conexion())->getConexion();
      
          $query = "INSERT INTO jugadores VALUES (null,:nombres, :apellidos, :apodo, :edad, :fecha_nacimiento, :fallecimiento, :lugar_nacimiento, :nacionalidad, :altura, :peso, :pie_habil, :goles, :imagen, :id_equipo, :id_posicion, :id_estado)";
      
          $PDOStatament = $conexion->prepare($query);
          $PDOStatament->execute([
              'nombres' => $nombres,
              'apellidos'=> $apellidos,
              'apodo' =>  $apodo,
              'edad' => $edad,
              'fecha_nacimiento' => $fecha_nacimiento,
              'fallecimiento' => $fallecimiento,
              'lugar_nacimiento' => $lugar_nacimiento,
              'nacionalidad' => $nacionalidad,
              'altura' => $altura ,
              'peso' => $peso,
              'pie_habil' => $pie_habil,
              'goles' => $goles,
              'imagen' => $imagen,
              'id_equipo' => $id_equipo,
              'id_posicion' => $id_posicion,
              'id_estado' => $id_estado
          ]);
      
          
      }

      public function edit($nombres, $apellidos, $apodo, $edad, $fecha_nacimiento, $fallecimiento, $lugar_nacimiento, $nacionalidad, $altura, $peso, $pie_habil, $goles, $id_equipo, $id_posicion, $id_estado,$id) {

          $conexion = (new Conexion())->getConexion();
      
          $query = "UPDATE jugadores  SET 
             nombres = :nombres, 
             apellidos = :apellidos,
             apodo = :apodo, 
             edad = :edad, 
             fecha_nacimiento = :fecha_nacimiento, 
             fallecimiento= :fallecimiento, 
             lugar_nacimiento = :lugar_nacimiento, 
             nacionalidad = :nacionalidad, 
             altura = :altura, 
             peso = :peso, 
             pie_habil = :pie_habil,
             goles =  :goles, 
             id_equipo = :id_equipo, 
             id_posicion = :id_posicion, 
             id_estado = :id_estado
             WHERE id = :id
             
             ";
      
          $PDOStatament = $conexion->prepare($query);
          $PDOStatament->execute([
              'id' => $id,
              'nombres' => $nombres,
              'apellidos'=> $apellidos,
              'apodo' =>  $apodo,
              'edad' => $edad,
              'fecha_nacimiento' => $fecha_nacimiento,
              'fallecimiento' => $fallecimiento,
              'lugar_nacimiento' => $lugar_nacimiento,
              'nacionalidad' => $nacionalidad,
              'altura' => $altura ,
              'peso' => $peso,
              'pie_habil' => $pie_habil,
              'goles' => $goles,
              'id_equipo' => $id_equipo,
              'id_posicion' => $id_posicion,
              'id_estado' => $id_estado
          ]);
      
          
      }

        /* Reemplazar Imagen */

     public function reemplazar_imagen($imagen, $id){

          $conexion = (new Conexion())-> getConexion();
  
          $query = "UPDATE jugadores SET imagen = :imagen WHERE id = :id";
  
          $PDOStatament = $conexion->prepare($query);
          $PDOStatament->execute(
              [
                  'id' => $id,
                  'imagen' => $imagen
              ]
          );
  
  
  
      }
  
  
      
      /* Eliminar comic */
  
      public function delete() {
          $conexion = (new Conexion())-> getConexion();
  
          $query = "DELETE FROM jugadores WHERE id = ?";
  
          $PDOStatament = $conexion->prepare($query);
  
          $PDOStatament->execute([$this->id]);
  
       }
  
  
      


     public function jugadores_completo(): array {
        $catalogo= [];

        $conexion = (new Conexion())-> getConexion();

        $query = "SELECT * FROM jugadores";

        $PDOStatament = $conexion->prepare($query);
        $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatament->execute();

        $catalogo= $PDOStatament->fetchAll();

        return $catalogo;

}


public function jugador_x_id(int $idProducto)   {
        
     $conexion = (new Conexion())-> getConexion();

     $query = "SELECT * FROM jugadores WHERE id = :idProducto";

     $PDOStatament = $conexion->prepare($query);
     $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);
     $PDOStatament->execute(
         [
             'idProducto' => $idProducto
         ]
     );

     $result= $PDOStatament->fetch();

     if(!$result){
         return null;
     }

     return $result;
 }

 public function getEquipo() {
     $equipo = (new Equipo())->equipo_x_id($this->id_equipo);
     $nombre = $equipo->getClub();
     return $nombre; 
 }

 public function getPosicion() {
     $posicion = (new Posicion())->posicion_x_id($this->id_posicion);
     $nombre = $posicion->getLugar();
     return $nombre; 
 }

 public function getEstado() {
     $estado = (new Estado())->estado_x_id($this->id_estado);
     $nombre = $estado->getSituacion();
     return $nombre; 
 }

 





     /**
      * Get the value of id
      */ 
     public function getId()
     {
          return $this->id;
     }

     /**
      * Get the value of nombre
      */ 
     public function getNombres()
     {
          return $this->nombres;
     }

     /**
      * Get the value of apellidos
      */ 
     public function getApellidos()
     {
          return $this->apellidos;
     }

     /**
      * Get the value of apodo
      */ 
     public function getApodo()
     {
          return $this->apodo;
     }

     /**
      * Get the value of edad
      */ 
     public function getEdad()
     {
          return $this->edad;
     }

     /**
      * Get the value of fecha_nacimiento
      */ 
     public function getFecha_nacimiento()
     {
          return $this->fecha_nacimiento;
     }

     /**
      * Get the value of fallecimiento
      */ 
     public function getFallecimiento()
     {
          return $this->fallecimiento;
     }

     /**
      * Get the value of lugar_nacimiento
      */ 
     public function getLugar_nacimiento()
     {
          return $this->lugar_nacimiento;
     }

     /**
      * Get the value of nacionalidad
      */ 
     public function getNacionalidad()
     {
          return $this->nacionalidad;
     }

     /**
      * Get the value of altura
      */ 
     public function getAltura()
     {
          return $this->altura;
     }

     /**
      * Get the value of peso
      */ 
     public function getPeso()
     {
          return $this->peso;
     }

     /**
      * Get the value of pie_habil
      */ 
     public function getPie_habil()
     {
          return $this->pie_habil;
     }

     /**
      * Get the value of goles
      */ 
     public function getGoles()
     {
          return $this->goles;
     }

     /**
      * Get the value of imagen
      */ 
     public function getImagen()
     {
          return $this->imagen;
     }

     /**
      * Get the value of id_equipo
      */ 
     public function getId_equipo()
     {
          return $this->id_equipo;
     }

     /**
      * Get the value of id_posicion
      */ 
     public function getId_posicion()
     {
          return $this->id_posicion;
     }

     /**
      * Get the value of id_estado
      */ 
     public function getId_estado()
     {
          return $this->id_estado;
     }
 }


?>