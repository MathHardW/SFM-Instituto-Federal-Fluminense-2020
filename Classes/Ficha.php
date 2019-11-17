<?php

class Ficha {
    private $codigo;
    private $trabalha;
    private $dependentes;
    private $atendimentoEspecial;
    private $moraSozinho;
    private $sexo;
    private $data;
    
    private $cidade;
    
    function __construct() {
        
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getTrabalha() {
        return $this->trabalha;
    }

    function getDependentes() {
        return $this->dependentes;
    }

    function getAtendimentoEspecial() {
        return $this->atendimentoEspecial;
    }

    function getMoraSozinho() {
        return $this->moraSozinho;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getData() {
        return $this->data;
    }

    function getCidade() {
        return $this->cidade;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setTrabalha($trabalha) {
        $this->trabalha = $trabalha;
    }

    function setDependentes($dependentes) {
        $this->dependentes = $dependentes;
    }

    function setAtendimentoEspecial($atendimentoEspecial) {
        $this->atendimentoEspecial = $atendimentoEspecial;
    }

    function setMoraSozinho($moraSozinho) {
        $this->moraSozinho = $moraSozinho;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

}
