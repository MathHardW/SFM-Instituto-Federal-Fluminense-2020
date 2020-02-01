<?php

require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Conexao.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Cidade.php';

class CidadeDAO {

    private $Connection;
    private $Cidade;

    function __construct() {
        $this->Connection = new Conexao();
        $this->Cidade = new Cidade();
    }

    public function querySelect() {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM `cidade` ORDER BY id DESC;;");
            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function querySelectId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM `cidade` WHERE id=?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);

            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryInsert() {
        try {
            $nome = $this->Cidade->getNome();
            $estado = $this->Cidade->getEstado();

            $retornoDB = $this->Connection->Conectar()->prepare("INSERT INTO `cidade`(`nome`, `estado`) VALUES (?, ?);");

            $retornoDB->bindParam(1, $nome, PDO::PARAM_STR);
            $retornoDB->bindParam(2, $estado, PDO::PARAM_STR);

            if ($retornoDB->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function queryUpdate($id) {
        try {
            $nome = $this->Cidade->getNome();
            $estado = $this->Cidade->getEstado();

            $retornoDB = $this->Connection->Conectar()->prepare("UPDATE `dbmad3`.`cidade` SET `nome` = ?, `estado` = ? WHERE `id` = ?;");
            $retornoDB->bindParam(1, $nome, PDO::PARAM_STR);
            $retornoDB->bindParam(2, $estado, PDO::PARAM_STR);
            $retornoDB->bindParam(3, $id, PDO::PARAM_INT);

            if ($retornoDB->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function queryDeleteId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("DELETE FROM `cidade` WHERE id=?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);

            if ($retornoDB->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    function getCidade() {
        return $this->Cidade;
    }

}
