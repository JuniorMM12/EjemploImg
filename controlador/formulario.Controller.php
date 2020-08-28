<?php

require_once '../modelo/formulario.model.php';

class FormularioController{

    public $modelo;

    public function FormularioController()
    {
        $this->modelo = new FormularioModel();
    }

    public function registrarImagenes()
    {
        $this->modelo->img1 =  $_FILES['Img1']['name'];
        $this->modelo->img2 =  $_FILES['Img2']['name'];
        $this->modelo->img3 =  $_FILES['Img3']['name'];
        $ruta = $_SERVER['DOCUMENT_ROOT'] . '/img/Uploads/Img_temporales/';
        move_uploaded_file($_FILES['Img1']['tmp_name'],$ruta.$this->modelo->img1);
        move_uploaded_file($_FILES['Img2']['tmp_name'],$ruta.$this->modelo->img2);
        move_uploaded_file($_FILES['Img3']['tmp_name'],$ruta.$this->modelo->img3);
        $Mensaje = [];
        if ($this->modelo->RegistrarImagenes()) {
           $Mensaje = ['Mensaje'=>'Imagenes guardadas correctamente', 'Estado'=>true];
        }else{
            $Mensaje = ['Mensaje'=>'Hubo un error al guardar las imagenes', 'Estado'=>true];
        }
        echo json_encode($Mensaje);
    }
} 
?> 