<?php
    class Tabluleiro {
        //Listas de Atributos
        private $linha;
        private $coluna;

    }

    public function __construct($l, $c){
        $this->linha = $l;
        $this->coluna = $c;
    }

    public function get_linha(){
        return($this->linha);
    }

    public function get_coluna(){
        return($this->coluna);
    }    

    //Listas de Métodos
?>