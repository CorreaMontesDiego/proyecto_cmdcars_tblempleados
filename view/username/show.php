<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
    require_once("C:/xampp/htdocs/proyecto/controller/usernameController.php");
    $envio = new empleadoControlador();
    $date = $envio->show($_GET['id']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido paterno</th>
            <th scope="col">Apellido materno</th>
            <th scope="col">Domicilio</th>
            <th scope="col">Curp</th>
            <th scope="col">Numero de telefono</th>
            <th scope="col">Id sucursal</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["Id"]?></td>
            <td scope="col"><?= $date["Nombre"]?></td>
            <td scope="col"><?= $date["ApellidoPaterno"]?></td>
            <td scope="col"><?= $date["ApellidoMaterno"]?></td>
            <td scope="col"><?= $date["Domicilio"]?></td>
            <td scope="col"><?= $date["Curp"]?></td>
            <td scope="col"><?= $date["NumeroDeTelefono"]?></td>
            <td scope="col"><?= $date["IdSucursal"]?></td>
        </tr>
    </tbody>
</table>



<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>