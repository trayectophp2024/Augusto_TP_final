<?php

class Conexion {

    //atributos -> modificadores de acceso

    public const DB_SERVER = "localhost";
    public const DB_USER = "root";
    public const DB_PASS = "root";
    public const DB_NAME = "futbol_php";

    

    const DB_DSN = "mysql:host=" . self::DB_SERVER . ";dbname=" . self::DB_NAME . ";charset=utf8mb4";

    /* Atibuto con tipo PDO */

    protected PDO $db;

    //Metodo constructor 

    public function __construct()
    {
        try {
            $this->db = new PDO(self::DB_DSN, self::DB_USER, self::DB_PASS);
        } catch (Exception $e) {
                die("Error al conectar con MYSQL");
        }
    }


    //Metodo para llamar la conexion en cada archivo

    public function getConexion() :PDO{
        return $this->db;
    }
    





   

}


?>