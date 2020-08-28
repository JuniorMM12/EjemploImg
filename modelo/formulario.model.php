<?php

require_once 'conexion.php';

    class FormularioModel extends Conectar{

        public $img1;
        public $img2;
        public $img3;
        protected $con;
 

        public function __construct()
        {
            $this->con = parent::Conexion();
        }
    
        public function RegistrarImagenes()
        {
            try {
                $sql = "INSERT INTO img(`img1`, `img2`, `img3`) VALUES
                ('{$this->img1}', '{$this->img2}', '{$this->img3}')";
                $query = $this->con->prepare($sql);
                $query->execute();
                return true;

            } catch (Exception $e) {
                return false;
            }
        }
    }

?> 