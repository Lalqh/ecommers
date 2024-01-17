<?php 
class Conexion {
    public static function conectar() {
        $host = "64.20.36.19";
        $dbname = "s32759_eccomers";
        $usuario = "u32759_QZg7kAx1eK";
        $contrasena = "bZ06WT6pTrYoTSJ8TxTzqaRm";
        try {
            $conexion = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $contrasena);
            return $conexion;
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
}
