<?php

require_once 'Classes/Conexao.php';
require_once 'Classes/Ficha.php';

class FichaDAO {

    private $Connection;
    private $Ficha;

    function __construct() {
        $this->Connection = new Conexao();
        $this->Ficha = new Ficha();
    }

    public function querySelectCodigo($codigo) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM `ficha` WHERE codigo=?;");
            $retornoDB->bindParam(1, $codigo, PDO::PARAM_STR);

            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }   

    public function querySelect() {
        try {
            $acompanhamentoId = $this->Ficha->getAcompanhamento();
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM `ficha` WHERE Acompanhamento_id = ?;");
            $retornoDB->bindParam(1, $acompanhamentoId, PDO::PARAM_INT);

            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryInsert() {
        try {
            //GERADOR DE CÓDIGO=================================================
            $fichaDAO = new FichaDAO();
            
            $codigoTemp = null;
            $codigo = null;
            do {
                $codigo = "#" . mt_rand(1000, 99999);
                $codigoTemp = $fichaDAO->querySelectCodigo($codigo);
            } while ($codigoTemp != null);
            //==================================================================

            $update = 0;
            $trabalha = $this->Ficha->getTrabalha();
            $dependentes = $this->Ficha->getDependentes();
            $especial = $this->Ficha->getAtendimentoEspecial();
            $moradia = $this->Ficha->getMoradia();
            $sexo = $this->Ficha->getSexo();
            $data = $this->Ficha->getData();
            $acompanhamentoId = $this->Ficha->getAcompanhamento();
            $cidadeId = $this->Ficha->getCidade();

            $retornoDB = $this->Connection->Conectar()->prepare("
                    INSERT INTO `dbmad3`.`ficha` 
                                        (`codigo`, 
                                        `update`, 
                                        `trabalha`, 
                                        `dependentes`, 
                                        `atendimentoEspecial`, 
                                        `moraSozinho`, 
                                        `sexo`, 
                                        `data`, 
                                        `Acompanhamento_id`, 
                                        `Cidade_id`) 
                                    VALUES 
                                        (?,?,?,?,?,?,?,?,?,?); 
            ");

            $retornoDB->bindParam(1, $codigo, PDO::PARAM_STR);
            $retornoDB->bindParam(2, $update, PDO::PARAM_INT);
            $retornoDB->bindParam(3, $trabalha, PDO::PARAM_INT);
            $retornoDB->bindParam(4, $dependentes, PDO::PARAM_INT);
            $retornoDB->bindParam(5, $especial, PDO::PARAM_INT);
            $retornoDB->bindParam(6, $moradia, PDO::PARAM_INT);
            $retornoDB->bindParam(7, $sexo, PDO::PARAM_STR);
            $retornoDB->bindParam(8, $data, PDO::PARAM_STR);
            $retornoDB->bindParam(9, $acompanhamentoId, PDO::PARAM_INT);
            $retornoDB->bindParam(10, $cidadeId, PDO::PARAM_INT);

            if ($retornoDB->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    function getFicha() {
        return $this->Ficha;
    }

}
