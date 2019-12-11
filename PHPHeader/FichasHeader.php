<?php
//IMPORTANDO AS CLASSES---------------------------------------------------------
require_once 'ClassesDAO/FichaDAO.php';
require_once 'ClassesDAO/CidadeDAO.php';
//------------------------------------------------------------------------------    
//ESTANCIANDO A CLASSE----------------------------------------------------------
$fichaDAO = new FichaDAO();
$cidadeDAO = new CidadeDAO();
$fichaDAO->getFicha()->setAcompanhamento($_GET['acompanhamento']);
//------------------------------------------------------------------------------