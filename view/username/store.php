<?php
    require_once("C:/xampp/htdocs/proyecto/controller/usernameController.php");
    $envio = new empleadoControlador();
    $envio->guardar($_POST['nombre'],$_POST['appa'],$_POST['amma'],$_POST['dom'],$_POST['curp'],$_POST['num'],$_POST['suc']);
?>


