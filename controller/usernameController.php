<?php
    class empleadoControlador{
        private $model;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new empleadoModelo();
        }   
        public function guardar($nombre,$appa,$amma,$dom,$curp,$num,$suc){
            $id = $this->model->insertar($nombre,$appa,$amma,$dom,$curp,$num,$suc);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id_empleado,$nombre,$appa,$amma,$dom,$curp,$num,$suc){
            return ($this->model->update($id_empleado,$nombre,$appa,$amma,$dom,$curp,$num,$suc) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>