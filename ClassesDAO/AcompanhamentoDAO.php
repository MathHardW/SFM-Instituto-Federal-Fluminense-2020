<?php

require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Conexao.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Acompanhamento.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/FichaDAO.php';

class AcompanhamentoDAO {

    private $Connection;
    private $Acompanhamento;

    function __construct() {
        $this->Connection = new Conexao();
        $this->Acompanhamento = new Acompanhamento();
    }

    public function querySelect() {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT acompanhamento.id,
                                                                        acompanhamento.titulo,
                                                                        acompanhamento.servidor,
                                                                        curso.nome,
                                                                        DATE_FORMAT(acompanhamento.datainicio, '%d/%m/%Y'),
                                                                        DATE_FORMAT(acompanhamento.datafim, '%d/%m/%Y'),
                                                                        acompanhamento.status
                                                                FROM `dbmad3`.`acompanhamento` join `dbmad3`.curso
                                                                on curso.id = acompanhamento.Curso_id;");
            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function querySelectiD($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT acompanhamento.id,
                                                                        acompanhamento.titulo,
                                                                        acompanhamento.servidor,
                                                                        curso.nome,
                                                                        acompanhamento.dataInicio,
                                                                        acompanhamento.datafim
                                                                FROM `dbmad3`.`acompanhamento` join `dbmad3`.curso
                                                                on curso.id = acompanhamento.Curso_id WHERE acompanhamento.id = ?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);
            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryInsert() {
        try {
            $titulo = $this->Acompanhamento->getTitulo();
            $servidor = $this->Acompanhamento->getServidor();
            $alunosIniciais = $this->Acompanhamento->getAlunosIniciais();
            $alunosFinais = $this->Acompanhamento->getAlunosFinais();
            $periodo = $this->Acompanhamento->getPeriodoDeIngresso();
            $dataIni = $this->Acompanhamento->getDataInicio();
            $dataFim = $this->Acompanhamento->getDataFim();
            $curso = $this->Acompanhamento->getCurso();

            $retornoDB = $this->Connection->Conectar()->prepare("INSERT INTO `dbmad3`.`acompanhamento` (`titulo`, `servidor`, `AlunosIniciais`,`AlunosFinais`,`dataInicio`,`dataFim`,`periodoIngresso`,`Curso_id`)
                                                                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?);");

            $retornoDB->bindParam(1, $titulo, PDO::PARAM_STR);
            $retornoDB->bindParam(2, $servidor, PDO::PARAM_STR);
            $retornoDB->bindParam(3, $alunosIniciais, PDO::PARAM_INT);
            $retornoDB->bindParam(4, $alunosFinais, PDO::PARAM_INT);
            $retornoDB->bindParam(5, $dataIni, PDO::PARAM_STR);
            $retornoDB->bindParam(6, $dataFim, PDO::PARAM_STR);
            $retornoDB->bindParam(7, $periodo, PDO::PARAM_STR);
            $retornoDB->bindParam(8, $curso, PDO::PARAM_STR);

            if ($retornoDB->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function queryFinalizarAcompanhamento($id) {
        $fichasDAO = new FichaDAO();
        
        $fichasDAO->getFicha()->setAcompanhamento($id);
        $AlunosFinais = count($fichasDAO->querySelect(""));

        $retornoDB = $this->Connection->Conectar()->prepare("UPDATE `dbmad3`.`acompanhamento` SET `alunosFinais` = ?, `status` = 1 WHERE `id` = ?;");
        $retornoDB->bindParam(1, $AlunosFinais, PDO::PARAM_INT);
        $retornoDB->bindParam(2, $id, PDO::PARAM_INT);

        if ($retornoDB->execute()) {
            return "ok";
        } else {
            return 'erro';
        }
    }

    function getAcompanhamento() {
        return $this->Acompanhamento;
    }

}
