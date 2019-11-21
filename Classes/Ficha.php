<?php

class Ficha {
    private $codigo;
    private $trabalha;
    private $dependentes;
    private $atendimentoEspecial;
    private $moradia;
    private $sexo;
    private $data;
    
    private $cidade;
    private $acompanhamento;
    
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

    function getMoradia() {
        return $this->moradia;
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
    
    function getAcompanhamento() {
        return $this->acompanhamento;
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

    function setMoradia($moradia) {
        $this->moradia = $moradia;
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
    
    function setAcompanhamento($acompanhamento) {
        $this->acompanhamento = $acompanhamento;
    }

}
