<?php

class Curso {
    private $nome;
    private $modalidade;
    
    function __construct() {}

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function getModalidade() {
        return $this->modalidade;
    }

    function setModalidade($modalidade) {
        $this->modalidade = $modalidade;
    }

}
