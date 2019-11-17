<?php
require_once 'Classes/Modalidade.php';
require_once 'Classes/Curso.php';

class ModalidadeDAO {
    private $Connection;
    private $Modalidade;

    function __construct() {
        $this->Connection = new Conexao();
        $this->Modalidade = new Modalidade("", new Curso());
    }

    public function querySelect() {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT 
                                                                      modalidade.id,
                                                                      modalidade.nome,
                                                                      nivel.nome
                                                                FROM `modalidade` join nivel
                                                                on nivel.id = modalidade.Nivel_id;");
            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function querySelectId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM `modalidade` WHERE id=?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);

            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryInsert() {
        try {
            $nome = $this->Modalidade->getNome();
            $nivel = $this->Modalidade->getNivel();

            $retornoDB = $this->Connection->Conectar()->prepare("INSERT INTO `modalidade`(`nome`,`Nivel_id`) VALUES (?, ?);");
            $retornoDB->bindParam(1, $nome, PDO::PARAM_STR);
            $retornoDB->bindParam(2, $nivel, PDO::PARAM_INT);

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
            $retornoDB = $this->Connection->Conectar()->prepare("DELETE FROM `modalidade` WHERE id=?;");
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

    function getModalidade() {
        return $this->Modalidade;
    }

}
