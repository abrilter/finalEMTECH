<?php
class Datos_model{
    private $db;
    private $datos;

        public function __construct(){
            $this-> db = conectar::conectarB();
            $this-> datos = array();
        }

        public function get_datos(){
            $sql="SELECT * from usuarios";
            $resultado = $this -> db-> query($sql);

            while($row = $resultado -> fetch_assoc())
            {
                $this -> datos[] = $row;
            }   
            return $this -> datos;
        }

        public function insertar($us,$co,$ce,$no,$ap){
            $sql="INSERT into usuarios (Usuario,Contraseña,Correo,Nombre,Apellido) values ('$us','$co','$ce','$no','$ap')";
            $this -> db -> query($sql);
            
        }
}


?>