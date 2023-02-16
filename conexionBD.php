<?php
class conectar{
    public static function conectarB(){
        $conexion = new mysqli ("localhost","root","","panqueso");
        return $conexion;
    }

}

?>