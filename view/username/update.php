<?php
    require_once("C:/xampp/htdocs/proyecto/controller/usernameController.php");
    $envio = new empleadoControlador();
    $envio->update($_POST['id_empleado'],$_POST['nuevo_nombre'],$_POST['nuevo_appa'],$_POST['nuevo_amma'],$_POST['nuevo_dom'],$_POST['nuevo_curp'],$_POST['nuevo_num'],$_POST['nuevo_suc']);
?>