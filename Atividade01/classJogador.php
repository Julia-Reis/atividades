<?php
    class Jogador{
        //Lista de Atributos
        private $jogador1;
        private $jogador2;
    }

    public function __construct($j1, $j2) {
        $this->$jogador1 = $j1;
        $this->$jogador2 = $j2;
    }

    public function get_jogador1(){
        return($this->jogador1);
    }

    public function get_jogador2(){
        return($this->jogador2);
    }

    //Lista de Métodos
?>