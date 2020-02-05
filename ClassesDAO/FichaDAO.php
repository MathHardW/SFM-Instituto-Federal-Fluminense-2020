<?php

require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Conexao.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Ficha.php';

class FichaDAO {

    private $Connection;
    private $Ficha;

    function __construct() {
        $this->Connection = new Conexao();
        $this->Ficha = new Ficha();
    }

    public function querySelectCodigoExistente() {
        try {
            $acompanhamentoId = $this->Ficha->getAcompanhamento();
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT ficha.id, ficha.codigo FROM ficha WHERE Acompanhamento_id != ? ;");
            $retornoDB->bindParam(1, $acompanhamentoId, PDO::PARAM_INT);

            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryVerificaCodigo($codigo) {
        try {
            $acompanhamentoId = $this->Ficha->getAcompanhamento();
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT ficha.id, ficha.codigo FROM ficha WHERE Acompanhamento_id = ? AND ficha.codigo = ?;");
            $retornoDB->bindParam(1, $acompanhamentoId, PDO::PARAM_INT);
            $retornoDB->bindParam(2, $codigo, PDO::PARAM_STR);

            $retornoDB->execute();

            if ($retornoDB->rowCount() > 0) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function querySelectCodigo($codigo) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM `ficha` WHERE codigo=? ORDER BY id DESC LIMIT 1");
            $retornoDB->bindParam(1, $codigo, PDO::PARAM_STR);

            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function querySelectAll($like) {
        try {

            if ($like == null) {
                $retornoDB = $this->Connection->Conectar()->prepare("SELECT 
                                                                ficha.codigo,
                                                                acompanhamento.titulo,
                                                                DATE_FORMAT(ficha.data, '%d/%m/%Y'),
                                                                ficha.trabalha,
                                                                ficha.dependentes,
                                                                ficha.atendimentoEspecial,
                                                                ficha.moraSozinho,
                                                                ficha.sexo,
                                                                cidade.nome 
                                                                FROM ficha, acompanhamento, cidade 
                                                                WHERE ficha.Acompanhamento_id = acompanhamento.id AND ficha.Cidade_id = cidade.id ORDER BY ficha.id;");
                $retornoDB->execute();
                return $retornoDB->fetchAll();
            }else{
                $retornoDB = $this->Connection->Conectar()->prepare("SELECT 
                                                                ficha.codigo,
                                                                acompanhamento.titulo,
                                                                DATE_FORMAT(ficha.data, '%d/%m/%Y'),
                                                                ficha.trabalha,
                                                                ficha.dependentes,
                                                                ficha.atendimentoEspecial,
                                                                ficha.moraSozinho,
                                                                ficha.sexo,
                                                                cidade.nome 
                                                                FROM ficha, acompanhamento, cidade 
                                                                WHERE ficha.Acompanhamento_id = acompanhamento.id AND ficha.Cidade_id = cidade.id 
                                                                AND (ficha.codigo LIKE '%".$like."%') ORDER BY ficha.id;");
                $retornoDB->execute();
                return $retornoDB->fetchAll();
            }
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function querySelect($texto) {
        try {
            $acompanhamentoId = $this->Ficha->getAcompanhamento();

            if ($texto == null) {
                $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM ficha, cidade WHERE Cidade_id = cidade.id AND Acompanhamento_id = ? ORDER BY ficha.id DESC;");
                $retornoDB->bindParam(1, $acompanhamentoId, PDO::PARAM_INT);

                if ($retornoDB->execute()) {
                    return $retornoDB->fetchAll();
                } else {
                    return 'erro';
                }
            } else {

                $sqlLike = "SELECT * FROM ficha, cidade WHERE Cidade_id = cidade.id AND Acompanhamento_id = ? AND (ficha.codigo LIKE '%" . $texto . "%')";

                $retornoDB = $this->Connection->Conectar()->prepare($sqlLike);
                $retornoDB->bindParam(1, $acompanhamentoId, PDO::PARAM_INT);

                if ($retornoDB->execute()) {
                    return $retornoDB->fetchAll();
                } else {
                    return 'erro';
                }
            }
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryInsert() {
        try {
            $fichaDAO = new FichaDAO();

            if ($this->Ficha->getCodigo() == "") {
                //GERADOR DE CÓDIGO=================================================
                $codigoTemp = null;
                $codigo = null;
                do {
                    $codigo = "#" . mt_rand(1000, 99999);
                    $codigoTemp = $fichaDAO->querySelectCodigo($codigo);
                } while ($codigoTemp != null);

                $update = 0;
                //==================================================================
            } else {
                $codigo = $this->Ficha->getCodigo();
                $retorno = $fichaDAO->querySelectCodigo($codigo);
                $update = $retorno[0][2] + 1;
            }


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

    public function queryDelete($id) {
        $retornoDB = $this->Connection->Conectar()->prepare("DELETE FROM `dbmad3`.`ficha` WHERE id= ?;");
        $retornoDB->bindParam(1, $id, PDO::PARAM_INT);

        if ($retornoDB->execute()) {
            return "ok";
        } else {
            return 'erro';
        }
    }

    public function queryUpdate($id) {
        $trabalha = $this->Ficha->getTrabalha();
        $dependentes = $this->Ficha->getDependentes();
        $especial = $this->Ficha->getAtendimentoEspecial();
        $moradia = $this->Ficha->getMoradia();
        $sexo = $this->Ficha->getSexo();
        $data = $this->Ficha->getData();
        $cidadeId = $this->Ficha->getCidade();

        $retornoDB = $this->Connection->Conectar()->prepare("UPDATE ficha SET 
            `trabalha` = ?, 
            `dependentes` = ?, 
            `atendimentoEspecial` = ?, 
            `moraSozinho` = ?, 
            `sexo` = ?, 
            `data` = ?, 
            `Cidade_id` = ? 
        WHERE `id` = ?;");

        $retornoDB->bindParam(1, $trabalha, PDO::PARAM_INT);
        $retornoDB->bindParam(2, $dependentes, PDO::PARAM_INT);
        $retornoDB->bindParam(3, $especial, PDO::PARAM_INT);
        $retornoDB->bindParam(4, $moradia, PDO::PARAM_INT);
        $retornoDB->bindParam(5, $sexo, PDO::PARAM_STR);
        $retornoDB->bindParam(6, $data, PDO::PARAM_STR);
        $retornoDB->bindParam(7, $cidadeId, PDO::PARAM_INT);
        $retornoDB->bindParam(8, $id, PDO::PARAM_INT);

        if ($retornoDB->execute()) {
            return "ok";
        } else {
            return 'erro';
        }
    }

    function getFicha() {
        return $this->Ficha;
    }

    function getConnection() {
        return $this->Connection;
    }

}
