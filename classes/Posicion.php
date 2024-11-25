<?php



class Posicion {
    protected $id;
    protected $lugar;


    
    public function posicion_completo(): array {
        $catalogo= [];

        $conexion = (new Conexion())-> getConexion();

        $query = "SELECT * FROM posicion";

        $PDOStatament = $conexion->prepare($query);
        $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatament->execute();

        $catalogo= $PDOStatament->fetchAll();

        return $catalogo;

}


public function posicion_x_id(int $idProducto)   {
    
    $conexion = (new Conexion())-> getConexion();

    $query = "SELECT * FROM posicion WHERE id = :idProducto";

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
     * Get the value of lugar
     */ 
    public function getLugar()
    {
        return $this->lugar;
    }
}








?>