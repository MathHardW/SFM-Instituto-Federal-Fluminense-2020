<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cidade
 *
 * @author mathe
 */

class Cidade {
    private $nome;
    private $estado;
    
    function __construct() {
        
    }
    
    function getNome() {
        return $this->nome;
    }

    function getEstado() {
        return $this->estado;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

}
