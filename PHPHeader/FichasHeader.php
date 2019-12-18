<?php
//IMPORTANDO AS CLASSES---------------------------------------------------------
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/FichaDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/CidadeDAO.php';
//------------------------------------------------------------------------------    
//ESTANCIANDO A CLASSE----------------------------------------------------------
$fichaDAO = new FichaDAO();
$cidadeDAO = new CidadeDAO();
$fichaDAO->getFicha()->setAcompanhamento($_GET['acompanhamento']);
//------------------------------------------------------------------------------