<?php

    class Estado {
        protected $id;
        protected $situacion;

        public function estado_completo(): array {
            $catalogo= [];

            $conexion = (new Conexion())-> getConexion();

            $query = "SELECT * FROM estado";

            $PDOStatament = $conexion->prepare($query);
            $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatament->execute();

            $catalogo= $PDOStatament->fetchAll();

            return $catalogo;

    }


    public function estado_x_id(int $idProducto)   {
        
        $conexion = (new Conexion())-> getConexion();
   
        $query = "SELECT * FROM estado WHERE id = :idProducto";
   
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
         * Get the value of situacion
         */ 
        public function getSituacion()
        {
                return $this->situacion;
        }
    }



?>