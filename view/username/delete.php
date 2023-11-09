<?php
    require_once("C:/xampp/htdocs/proyecto/controller/usernameController.php");
    $envio = new empleadoControlador();
    $envio->delete($_GET['id']);

?>