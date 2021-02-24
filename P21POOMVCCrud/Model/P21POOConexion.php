<?php
require_once ('P21POOConfig.php');
//Lo correcto es que la parte de define se establece en un un archivo Config.php aparte
class Conexion{
    protected $conexion;
    public static function Conectar(){//metodo estatico
        $BDHost=BDHost;
        $BDName=BDName;
        $BDUser=BDUser;
        $BDPassword=BDPassword; 
        try {
            $conexion=new PDO("mysql:host=$BDHost;dbname=$BDName",$BDUser,$BDPassword);
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");           
        } catch (Exception $e) {
            die("Error de conexion. ".$e->getMessage()." Linea".$e->getLine());
        }
        return $conexion;
    }
}
?>