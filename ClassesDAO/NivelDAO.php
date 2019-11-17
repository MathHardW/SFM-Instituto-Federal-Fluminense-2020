<?php
require_once 'Classes/Nivel.php';

class NivelDAO {
        private $Connection;
    private $Nivel;
    
    function __construct() {
        $this->Connection = new Conexao();
        $this->Nivel = new Nivel();
    }
    
    public function querySelect() {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM `nivel`;");
            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }
    
    public function querySelectId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM `nivel` WHERE id=?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);
            
            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }
    
    public function queryInsert() {
        try {
            $nome = $this->Nivel->getNome();

            $retornoDB = $this->Connection->Conectar()->prepare("INSERT INTO `nivel`(`nome`) VALUES (?);");           
            $retornoDB->bindParam(1, $nome   , PDO::PARAM_STR);

            if ($retornoDB->execute()) {return 'ok';} else {return 'erro';}
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }
    
     public function queryDeleteId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("DELETE FROM `nivel` WHERE id=?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);
            
            if ($retornoDB->execute()) {return 'ok';} else {return 'erro';}
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }
    
    function getNivel() {
        return $this->Nivel;
    }
}
