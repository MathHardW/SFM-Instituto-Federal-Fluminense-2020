<?php
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Conexao.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Curso.php';

class CursoDAO {
    private $Connection;
    private $Curso;
    
    function __construct() {
        $this->Connection = new Conexao();
        $this->Curso = new Curso();
    }
    
    public function querySelect() {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT curso.id,
                                                                        curso.nome,
                                                                        modalidade.nome 
                                                                FROM `curso` join modalidade
                                                                on modalidade.id = curso.Modalidade_id;");
            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }
    
    public function querySelectId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM `curso` WHERE id=?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);
            
            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }
    
    public function queryInsert() {
        try {
            $nome = $this->Curso->getNome();
            $modalidade = $this->Curso->getModalidade();

            $retornoDB = $this->Connection->Conectar()->prepare("INSERT INTO `curso`(`nome`,`Modalidade_id`) VALUES (?,?);");           
            $retornoDB->bindParam(1, $nome   , PDO::PARAM_STR);
            $retornoDB->bindParam(2, $modalidade   , PDO::PARAM_STR);

            if ($retornoDB->execute()) {return 'ok';} else {return 'erro';}
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }
    
     public function queryDeleteId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("DELETE FROM `curso` WHERE id=?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);
            
            if ($retornoDB->execute()) {return 'ok';} else {return 'erro';}
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }
    
    function getCurso() {
        return $this->Curso;
    }
}
