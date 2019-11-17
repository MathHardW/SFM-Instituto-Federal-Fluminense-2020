<?php

class Modalidade {
    private $nome;
    private $nivel;

    function __construct($nome, $nivel) {
        $this->nome  = $nome;
        $this->nivel = $nivel;
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getNivel() {
        return $this->nivel;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }

}
