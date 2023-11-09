<?php
    class empleadoModelo{

        private $PDO;
        public function __construct()

        {
            require_once("C:/xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function insertar($nombre,$appa,$amma,$dom,$curp,$num,$suc){
            $stament = $this->PDO->prepare("INSERT INTO tbl_empleado (Nombre, ApellidoPaterno, ApellidoMaterno, Domicilio, Curp, NumeroDeTelefono, IdSucursal) VALUES (:nombre,:appa,:amma,:dom,:curp,:num,:suc)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":appa",$appa);
            $stament->bindParam(":amma",$amma);
            $stament->bindParam(":dom",$dom);
            $stament->bindParam(":curp",$curp);
            $stament->bindParam(":num",$num);
            $stament->bindParam(":suc",$suc);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_empleado where Id = :Id limit 1");
            $stament->bindParam(":Id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_empleado");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function update($id_empleado,$nombre,$appa,$amma,$dom,$curp,$num,$suc){
            $stament = $this->PDO->prepare("UPDATE tbl_empleado SET Nombre = :nombre, ApellidoPaterno = :appa, ApellidoMaterno = :amma, Domicilio = :dom, Curp = :curp, NumeroDeTelefono = :num,  IdSucursal = :suc WHERE Id = :id_empleado");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":appa",$appa);
            $stament->bindParam(":amma",$amma);
            $stament->bindParam(":dom",$dom);
            $stament->bindParam(":curp",$curp);
            $stament->bindParam(":num",$num);
            $stament->bindParam(":suc",$suc);
            $stament->bindParam(":id_empleado",$id_empleado);            
            return ($stament->execute()) ? $id_envio : false;
        }

        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM tbl_empleado WHERE Id = :id_empleado");
            $stament->bindParam(":id_empleado",$id);
            return ($stament->execute()) ? true : false;
        }
        
    }

?>