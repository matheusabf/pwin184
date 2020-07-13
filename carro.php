<?php
    class Carro{
      private $marca;
      private $cor;
      private $placa;
      private $modelo;
        public function getMarca(){
            return $this -> marca;
        }
        public function setMarca($argmarca){
             $this -> marca = $argmarca;
        }
         public function getCor(){
            return $this -> cor;
        }
        public function setCor($argcor){
             $this -> cor = $argcor;
        }
         public function getPlaca(){
            return $this -> placa;
        }
        public function setPlaca($argplaca){
             $this -> placa = $argplaca;
        }
         public function getModelo(){
            return $this -> modelo;
        }
        public function setModelo($argmodelo){
             $this -> modelo = $argmodelo;
        }
    }
?>
