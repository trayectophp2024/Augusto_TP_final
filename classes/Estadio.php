<?php 

    class Estadio {
        protected $id;
        protected $nombre;
        protected $capacidad;
        protected $pais;        
        protected $imagen;


        public function estadios_completo(): array {
            $catalogo= [];

            $conexion = (new Conexion())-> getConexion();

            $query = "SELECT * FROM estadio";

            $PDOStatament = $conexion->prepare($query);
            $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatament->execute();

            $catalogo= $PDOStatament->fetchAll();

            return $catalogo;

    }


    public function estadio_x_id(int $idProducto)   {
        
        $conexion = (new Conexion())-> getConexion();
   
        $query = "SELECT * FROM estadio WHERE id = :idProducto";
   
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
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Get the value of cpacidad
         */ 
        public function getCapacidad()
        {
                return $this->capacidad;
        }

        /**
         * Get the value of pais
         */ 
        public function getPais()
        {
                return $this->pais;
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }
}