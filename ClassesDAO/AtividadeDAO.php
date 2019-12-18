<?php

require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Conexao.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Atividade.php';

class AtividadeDAO {

    private $Connection;
    private $Atividade;

    function __construct() {
        $this->Connection = new Conexao();
        $this->Atividade = new Atividade();
    }

    public function querySelect() {
        try {
            $id = $this->getAtividade()->getAcompanhamento();
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM atividade, tipoatividade WHERE atividade.TipoAtividade_id = tipoatividade.id and Acompanhamento_id = ?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);
            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function querySelectCodigo($id) {
        try {
            $idAcompanhamento = $this->getAtividade()->getAcompanhamento();
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM atividade WHERE atividade.id = ?");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);

            $retornoDB->execute();

            if ($retornoDB->execute()) {
                return $retornoDB->fetchAll();
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryInsert() {
        try {

            $titulo = $this->Atividade->getTitulo();
            $servidor = $this->Atividade->getServidor();
            $descricao = $this->Atividade->getDescricao();
            $publico = $this->Atividade->getPublicoAlvo();
            $resultadosEsperados = $this->Atividade->getResultadosEsperados();
            $resultadosObtidos = $this->Atividade->getResultadosObtidos();
            $dataInicio = $this->Atividade->getDataInicio();
            $dataFim = $this->Atividade->getDataFim();
            $acompanhamento = $this->Atividade->getAcompanhamento();
            $tipoAtividade = $this->Atividade->getTipoAtividade();


            $retornoDB = $this->Connection->Conectar()->prepare("INSERT INTO `dbmad3`.`atividade` 
            (`titulo`, `servidor`, `descricao`, `publicoAlvo`, `resultadosEsperados`, `resultadosObtidos`, `dataInicio`, `dataFim`, `Acompanhamento_id`,`TipoAtividade_id`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

            $retornoDB->bindParam(1, $titulo, PDO::PARAM_STR);
            $retornoDB->bindParam(2, $servidor, PDO::PARAM_STR);
            $retornoDB->bindParam(3, $descricao, PDO::PARAM_STR);
            $retornoDB->bindParam(4, $publico, PDO::PARAM_STR);
            $retornoDB->bindParam(5, $resultadosEsperados, PDO::PARAM_STR);
            $retornoDB->bindParam(6, $resultadosObtidos, PDO::PARAM_STR);
            $retornoDB->bindParam(7, $dataInicio, PDO::PARAM_STR);
            $retornoDB->bindParam(8, $dataFim, PDO::PARAM_STR);
            $retornoDB->bindParam(9, $acompanhamento, PDO::PARAM_INT);
            $retornoDB->bindParam(10, $tipoAtividade, PDO::PARAM_INT);

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
        $titulo = $this->Atividade->getTitulo();
        $servidor = $this->Atividade->getServidor();
        $descricao = $this->Atividade->getDescricao();
        $publicoAlvo = $this->Atividade->getPublicoAlvo();
        $resultadosEsperados = $this->Atividade->getResultadosEsperados();
        $resultadosObtidos = $this->Atividade->getResultadosObtidos();
        $dataInicio = $this->Atividade->getDataInicio();
        $dataFim = $this->Atividade->getDataFim();

        $retornoDB = $this->Connection->Conectar()->prepare("UPDATE atividade SET 
                                                                `titulo` = ?, 
                                                                `servidor` = ?, 
                                                                `descricao` = ?, 
                                                                `publicoAlvo` = ?, 
                                                                `resultadosEsperados` = ?, 
                                                                `resultadosObtidos` = ?, 
                                                                `dataInicio` = ?, 
                                                                `dataFim` = ? 
                                                            WHERE `id` = ?;");

        $retornoDB->bindParam(1, $titulo, PDO::PARAM_STR);
        $retornoDB->bindParam(2, $servidor, PDO::PARAM_STR);
        $retornoDB->bindParam(3, $descricao, PDO::PARAM_STR);
        $retornoDB->bindParam(4, $publicoAlvo, PDO::PARAM_STR);
        $retornoDB->bindParam(5, $resultadosEsperados, PDO::PARAM_STR);
        $retornoDB->bindParam(6, $resultadosObtidos, PDO::PARAM_STR);
        $retornoDB->bindParam(7, $dataInicio, PDO::PARAM_STR);
        $retornoDB->bindParam(8, $dataFim, PDO::PARAM_STR);
        $retornoDB->bindParam(9, $id, PDO::PARAM_INT);

        if ($retornoDB->execute()) {
            return "ok";
        } else {
            return 'erro';
        }
    }

    function getAtividade() {
        return $this->Atividade;
    }

}
