<?php
    class Livro{
      private $titulo;
      private $autor;
      private $ano;
      private $edicao;

        //inserido padrão camelCase nos métodos
        public function getTitulo(){
            return $this -> titulo;
        }
        public function setTitulo($argtitulo){
             $this -> titulo = $argtitulo;
        }
        public function getAutor(){
            return $this -> autor;
        }
        public function setAutor($argautor){
             $this -> autor = $argautor;
        }
        public function getAno(){
            return $this->ano;
        }
        public function setAno($argano){
             $this -> ano = $argano;
        }
        public function getEdicao(){
            return $this -> edicao;
        }
        public function setEdicao($argedicao){
             $this -> edicao = $argedicao;
        }
    }
?>
