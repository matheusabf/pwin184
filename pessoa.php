<?php
    class Pessoa{
      //faltou a criação dos atributos
      private $nome;
      private $idade;
      private $peso;
      private $sexo;

        public function getnome(){
            return $this -> nome;
        }
        public function setnome($argnome){
             $this -> nome = $argnome;
        }
        public function getidade(){
            return $this -> idade;
        }
        public function setidade($argidade){
             $this -> idade = $argidade;
        }
        public function getpeso(){
            return $this -> peso;
        }
        public function setpeso($argpeso){
             $this -> peso = $argpeso;
        }
        public function getsexo(){
            return $this -> sexo;
        }
        public function setsexo($argsexo){
             $this -> sexo = $argsexo;
        }
    }
?>
