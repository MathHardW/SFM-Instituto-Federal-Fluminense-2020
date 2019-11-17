<?php
require_once 'Classes/Conexao.php';
require_once 'Classes/Acompanhamento.php';

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
                                                                        acompanhamento.dataInicio,
                                                                        acompanhamento.datafim
                                                                FROM `acompanhamento` join curso
                                                                on curso.id = acompanhamento.Curso_id;");
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

            $retornoDB->bindParam(1, $nome   , PDO::PARAM_STR);
            $retornoDB->bindParam(2, $estado , PDO::PARAM_STR);

            if ($retornoDB->execute()) {return 'ok';} else {return 'erro';}
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }
  
}
