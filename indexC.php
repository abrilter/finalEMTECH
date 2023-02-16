<?php

include_once "conexionBD.php";
include "datos_control.php";
$control = new Datos_Controller();
if(isset ($_GET['opc'])){
    if($_GET['opc']==1){
        $control->nuevo();
    }
else if($_GET['opc']==2) {
    $control -> insert();
    }
}
    else{
        $control -> index();
    }


?>