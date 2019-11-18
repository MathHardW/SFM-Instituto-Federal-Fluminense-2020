<?php

class Acompanhamento {
    private $titulo;
    private $servidor;
    
    private $alunosIniciais;
    private $alunosFinais;
    private $periodoDeIngresso;

    private $dataInicio;
    private $dataFim;
    
    private $curso;
    
    function getTitulo() {
        return $this->titulo;
    }

    function getServidor() {
        return $this->servidor;
    }

    function getAlunosIniciais() {
        return $this->alunosIniciais;
    }

    function getAlunosFinais() {
        return $this->alunosFinais;
    }

    function getPeriodoDeIngresso() {
        return $this->periodoDeIngresso;
    }

    function getDataInicio() {
        return $this->dataInicio;
    }

    function getDataFim() {
        return $this->dataFim;
    }

    function getCurso() {
        return $this->curso;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setServidor($servidor) {
        $this->servidor = $servidor;
    }

    function setAlunosIniciais($alunosIniciais) {
        $this->alunosIniciais = $alunosIniciais;
    }

    function setAlunosFinais($alunosFinais) {
        $this->alunosFinais = $alunosFinais;
    }

    function setPeriodoDeIngresso($periodoDeIngresso) {
        $this->periodoDeIngresso = $periodoDeIngresso;
    }

    function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    function setDataFim($dataFim) {
        $this->dataFim = $dataFim;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

}
