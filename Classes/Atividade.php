<?php

class Atividade {

    private $titulo;
    private $servidor;
    private $descricao;
    private $publicoAlvo;
    private $resultadosEsperados;
    private $resultadosObtidos;
    private $dataInicio;
    private $dataFim;
    
    private $tipoAtividade;
    private $acompanhamento;
    
    function __construct() {}
    
    function getTitulo() {
        return $this->titulo;
    }

    function getServidor() {
        return $this->servidor;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPublicoAlvo() {
        return $this->publicoAlvo;
    }

    function getResultadosEsperados() {
        return $this->resultadosEsperados;
    }

    function getResultadosObtidos() {
        return $this->resultadosObtidos;
    }

    function getDataInicio() {
        return $this->dataInicio;
    }

    function getDataFim() {
        return $this->dataFim;
    }

    function getTipoAtividade() {
        return $this->tipoAtividade;
    }
    
    function getAcompanhamento() {
        return $this->acompanhamento;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setServidor($servidor) {
        $this->servidor = $servidor;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPublicoAlvo($publicoAlvo) {
        $this->publicoAlvo = $publicoAlvo;
    }

    function setResultadosEsperados($resultadosEsperados) {
        $this->resultadosEsperados = $resultadosEsperados;
    }

    function setResultadosObtidos($resultadosObtidos) {
        $this->resultadosObtidos = $resultadosObtidos;
    }

    function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    function setDataFim($dataFim) {
        $this->dataFim = $dataFim;
    }

    function setTipoAtividade($tipoAtividade) {
        $this->tipoAtividade = $tipoAtividade;
    }
    
    function setAcompanhamento($acompanhamento) {
        $this->acompanhamento = $acompanhamento;
    }

}
