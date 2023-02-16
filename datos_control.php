<?php

class Datos_Controller{

    public function index (){ 
        include_once "index.html";
    }
    public function nuevo() {
        require_once "registro.html";
    }
    public function insert(){
        include_once "modelo.php";
        $usuario = $_POST['Usuario'];
        $contraseña = $_POST['Contraseña'];
        $correo = $_POST['Correo'];
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $datos = new Datos_model();
        $datos-> insertar($usuario,$contraseña,$correo,$nombre,$apellido);
        $this -> index();
}
}
?>