<?php

/**
 * Description of Conexao
 *
 * @author matheus
 */
//CLASSE DE CONEXÃO
class Conexao {
    //ATRIBUTOS PRIVADOS
    private $usuario;
    private $senha;
    private $banco;
    private $servidor;
    private static $pdo;
    
    //CONSTRUTOR
    function __construct() {
        $this->servidor = "localhost";
        $this->banco = "dbmad3";
        $this->usuario = "root";
        $this->senha = "";
    }
    
    //MÉTODO PARA CONECTAR
    public function Conectar(){
        try {
            if(is_null(self::$pdo)){
                self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
            }
            return self::$pdo;
        } catch (PDOException $erro) {
            echo '</br>Erro .: '.$erro->getMessage();
        }
    }
}
