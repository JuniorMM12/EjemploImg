<?php 

class Conectar{
    private $host;
    private $user;
    private $pass;
    private $name_Database;
    private $chartset;
    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->name_Database = 'prueba';
        $this->chartset = 'utf8';

    }

    public static function Conexion(){
        try{
            $conexion = "mysql:host=localhost; dbname=prueba;charset=utf8";
            
            $opciones = [
                PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => false,
            ];
            $pdo = new PDO($conexion, 'root', '',$opciones);
            
            return $pdo;
        }catch(Exception $e){
            die("Error: " . $e->getMessage());
        }  
    }
}
?>