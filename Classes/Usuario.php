<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author mathe
 */
class Usuario {

    private $nomeCompleto;
    private $email;
    private $matricula;
    private $login;
    private $senha;
    private $permissao;
    private $situacao;
    private $dataEntrada;

    function getTodos() {
        return $this->nomeCompleto . " " . $this->email . " " . $this->matricula . " " . $this->login . " " . $this->senha . " " . $this->permissao . " " . $this->situacao . " " . $this->dataEntrada;
    }

    function getNomeCompleto() {
        return $this->nomeCompleto;
    }

    function getEmail() {
        return $this->email;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getPermissao() {
        return $this->permissao;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function getDataEntrada() {
        return $this->dataEntrada;
    }

    function setNomeCompleto($nomeCompleto) {
        $this->nomeCompleto = $nomeCompleto;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setPermissao($permissao) {
        $this->permissao = $permissao;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

    function setDataEntrada($dataEntrada) {
        $this->dataEntrada = $dataEntrada;
    }

}
