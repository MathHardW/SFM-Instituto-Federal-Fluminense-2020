<?php

class Nivel {
    private $nome;

    function __construct() {}

    function getNome() {
        return $this->nome;
    }
    
    function setNome($nome) {
        $this->nome = $nome;
    }
}

