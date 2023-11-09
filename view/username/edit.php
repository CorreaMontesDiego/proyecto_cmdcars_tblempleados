<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
    require_once("C:/xampp/htdocs/proyecto/controller/usernameController.php");
    $envio = new empleadoControlador();
    $user = $envio->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <input type="hidden" name="id_empleado" value="<?= $user[0]?>">

    <h2>Modificando Registro</h2>


    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo nombre</label>
        <div class="col-sm-10">
        <input type="text" name="nuevo_nombre"  class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo apellido paterno</label>
        <div class="col-sm-10">
            <input type="text" name="nuevo_appa" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo apellido materno</label>
        <div class="col-sm-10">
        <input type="text" name="nuevo_amma"  class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo domicilio</label>
        <div class="col-sm-10">
            <input type="text" name="nuevo_dom" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva curp</label>
        <div class="col-sm-10">
        <input type="text" name="nuevo_curp"  class="form-control" id="inputPassword" value="<?= $user[5]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo número de telefono</label>
        <div class="col-sm-10">
            <input type="text" name="nuevo_num" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva id de la sucursal</label>
        <div class="col-sm-10">
            <input type="text" name="nuevo_suc" class="form-control" id="inputPassword" value="<?= $user[7]?>">
        </div>
    </div>

    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>