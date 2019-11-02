<?php
    interface DatosV{
            public function getMatricula();
            public function setMatricula($valor);
            public function getModelo();
            public function setModelo($valor);
            public function getFecha();
            public function setFecha($valor);
            public function getAveria();
            public function setAveria($valor);
    }
    interface DatosP{
            public function getNombre();
            public function setNombre($valor);
            public function getApellido1();
            public function setApellido1($valor);
            public function getApellido2();
            public function setApellido2($valor);
            public function getTel();
            public function setTel($valor);
    }
?>
