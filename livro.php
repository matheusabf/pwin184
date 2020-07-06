<?php 
    class livro{ 
        public function gettitulo(){
            return $this -> titulo; 
        }
        public function settitulo($argtitulo){
             $this -> titulo = $argtitulo; 
        }
        public function getautor(){
            return $this -> autor; 
        }
        public function setautor($argautor){
             $this -> autor = $argautor; 
        }
        public function getano(){
            return $this->ano; 
        }
        public function setano($argano){
             $this -> ano = $argano; 
        }
        public function getedicao(){
            return $this -> edicao; 
        }
        public function setedicao($argedicao){
             $this -> edicao = $argedicao; 
        }      
    }
?>