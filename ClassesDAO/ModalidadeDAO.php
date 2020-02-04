<?php
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Conexao.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Modalidade.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Nivel.php';

class ModalidadeDAO {
    private $Connection;
    private $Modalidade;

    function __construct() {
        $this->Connection = new Conexao();
        $this->Modalidade = new Modalidade("", new Nivel());
    }

    public function querySelect() {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT 
                                                                      modalidade.id,
                                                                      modalidade.nome,
                                                                      nivel.nome
                                                                FROM `modalidade` join nivel
                                                                on nivel.id = modalidade.Nivel_id ORDER BY id DESC;");
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

            $retornoDB = $this->Connection->Conectar()->prepare("INSERT INTO `dbmad3`.`modalidade`(`nome`,`Nivel_id`) VALUES (?, ?);");
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
    
    public function queryUpdate($id) {
        try {
            $nome = $this->getModalidade()->getNome();
            $nivel = $this->getModalidade()->getNivel();

            $retornoDB = $this->Connection->Conectar()->prepare("UPDATE `dbmad3`.`modalidade` 
                                                                SET 
                                                                `nome` = ?, 
                                                                `Nivel_id` = ? 
                                                                WHERE `id` = ?; ");
            $retornoDB->bindParam(1, $nome, PDO::PARAM_STR);
            $retornoDB->bindParam(2, $nivel, PDO::PARAM_INT);
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
