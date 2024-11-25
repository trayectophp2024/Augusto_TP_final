<?php 

    class Equipo {
        protected $id;
        protected $club;
        protected $pais;
        protected $fundacion;
        protected $estadio;
        protected $imagen;


        public function equipos_completo(): array {
            $catalogo= [];

            $conexion = (new Conexion())-> getConexion();

            $query = "SELECT * FROM equipos";

            $PDOStatament = $conexion->prepare($query);
            $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatament->execute();

            $catalogo= $PDOStatament->fetchAll();

            return $catalogo;

    }


    public function equipo_x_id(int $idProducto)   {
        
        $conexion = (new Conexion())-> getConexion();
   
        $query = "SELECT * FROM equipos WHERE id = :idProducto";
   
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
         * Get the value of club
         */ 
        public function getClub()
        {
                return $this->club;
        }

        /**
         * Get the value of pais
         */ 
        public function getPais()
        {
                return $this->pais;
        }

        /**
         * Get the value of fundacion
         */ 
        public function getFundacion()
        {
                return $this->fundacion;
        }

        /**
         * Get the value of estadio
         */ 
        public function getEstadio()
        {
                return $this->estadio;
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }
    }

?>


