<?php
//IMPORTANDO AS CLASSES---------------------------------------------------------
require_once 'ClassesDAO/CidadeDAO.php';
//------------------------------------------------------------------------------
require_once 'ClassesDAO/NivelDAO.php';
require_once 'ClassesDAO/ModalidadeDAO.php';
require_once 'ClassesDAO/CursoDAO.php';
//------------------------------------------------------------------------------

//ESTANCIANDO A CLASSE----------------------------------------------------------
$cidadeDAO = new CidadeDAO();
//------------------------------------------------------------------------------
$nivelDAO = new NivelDAO();
$modalidadeDAO = new ModalidadeDAO();
$cursoDAO = new CursoDAO();
//------------------------------------------------------------------------------

//VALORES INICIAIS DOS INPUTS---------------------------------------------------
$cidadeNome = ""; $cidadeEstado = "";
//------------------------------------------------------------------------------
$nivelNome = ""; $modalidadeNome = ""; $cursoNome = "";
//------------------------------------------------------------------------------

//PESQUISAS, EXCLUSÕES E EDIÇÕES------------------------------------------------
if (count($_GET) > 0) {
    //PESQUISAR CIDADE PELO ID -------------------------------------------------
    if (isset($_GET['pesquisarIdCidade'])) {
        $cidade = $cidadeDAO->querySelectId($_GET['pesquisarIdCidade']);
        $cidadeNome = $cidade[0]['nome'];
        $cidadeEstado = $cidade[0]['estado'];
    } else
    //EXCLUIR A CIDADE PELO ID -------------------------------------------------
    if (isset($_GET['excluirIdCidade'])) {
        if ($cidadeDAO->queryDeleteId($_GET['excluirIdCidade']) == 'ok') {
            header("location: http://localhost/PROJETO_VERSAO_3.0/AreaAdministrativa.php");
        } else {
            echo '<script type="text/javascript"> alert("Erro ao Excluir!") </script>';
        }
    } else
    //PESQUISAR O NIVEL PELO ID ------------------------------------------------
    if (isset($_GET['pesquisarIdNivel'])) {
        $nivel = $nivelDAO->querySelectId($_GET['pesquisarIdNivel']);
        $nivelNome = $nivel[0]['nome'];
    } else
    //EXCLUIR O NIVEL PELO ID --------------------------------------------------    
    if (isset($_GET['excluirIdNivel'])) {
        if ($nivelDAO->queryDeleteId($_GET['excluirIdNivel']) == 'ok') {
            header("location: http://localhost/PROJETO_VERSAO_3.0/AreaAdministrativa.php");
        } else {
            echo '<script type="text/javascript"> alert("Erro ao Excluir Nivel!") </script>';
        }
    } else
    //PESQUISAR A MODALIDADE PELO ID -------------------------------------------
    if (isset($_GET['pesquisarIdModalidade'])) {
        $modalidade = $modalidadeDAO->querySelectId($_GET['pesquisarIdModalidade']);
        $modalidadeNome = $modalidade[0]['nome'];
    } else
    //EXCLUIR O NIVEL PELO ID --------------------------------------------------    
    if (isset($_GET['excluirIdModalidade'])) {
        if ($modalidadeDAO->queryDeleteId($_GET['excluirIdModalidade']) == 'ok') {
            header("location: http://localhost/PROJETO_VERSAO_3.0/AreaAdministrativa.php");
        } else {
            echo '<script type="text/javascript"> alert("Erro ao Excluir Modalidade!") </script>';
        }
    } else 
    //PESQUISAR O CURSO PELO ID -------------------------------------------
    if (isset($_GET['pesquisarIdCurso'])) {
        $curso = $cursoDAO->querySelectId($_GET['pesquisarIdCurso']);
        $cursoNome = $curso[0]['nome'];
    } else 
    //EXCLUIR O NIVEL PELO ID --------------------------------------------------    
    if (isset($_GET['excluirIdCurso'])){
        if ($cursoDAO->queryDeleteId($_GET['excluirIdCurso']) == 'ok') {
            header("location: http://localhost/PROJETO_VERSAO_3.0/AreaAdministrativa.php");
        } else {
            echo '<script type="text/javascript"> alert("Erro ao Excluir Curso!") </script>';
        }       
    }else{
        echo '<script type="text/javascript"> alert("Ação Inválida!") </script>';
    }
}

//CADASTRANDO CIDADE------------------------------------------------------------
if (isset($_POST['cadastrarCidadeButton'])) {
    $cidadeDAO->getCidade()->setNome($_POST['nomeText']);
    $cidadeDAO->getCidade()->setEstado($_POST['estadoText']);

    if ($cidadeDAO->queryInsert() == 'ok') {
        header("location: http://localhost/PROJETO_VERSAO_3.0/AreaAdministrativa.php");
    } else {
        echo '<script type="text/javascript"> alert("Erro ao cadastrar Cidade!") </script>';
    }
}

//CADASTRANDO NIVEL------------------------------------------------------------
if (isset($_POST['cadastrarNivelButton'])) {
    $nivelDAO->getNivel()->setNome($_POST['nomeNivelText']);

    if ($nivelDAO->queryInsert() == 'ok') {
        header("location: http://localhost/PROJETO_VERSAO_3.0/AreaAdministrativa.php");
    } else {
        echo '<script type="text/javascript"> alert("Erro ao cadastrar Curso!") </script>';
    }
}

//CADASTRANDO MODALIDADE------------------------------------------------------------
if (isset($_POST['cadastrarModalidadeButton'])) {
    $modalidadeDAO->getModalidade()->setNome($_POST['nomeModalidadeText']);
    $modalidadeDAO->getModalidade()->setNivel($_POST['nivelModalidadeText']);

    if ($modalidadeDAO->queryInsert() == 'ok') {
        header("location: http://localhost/PROJETO_VERSAO_3.0/AreaAdministrativa.php");
    } else {
        echo '<script type="text/javascript"> alert("Erro ao cadastrar Modalidade!") </script>';
    }
}

//CADASTRANDO CURSO------------------------------------------------------------
if (isset($_POST['cadastrarCursoButton'])) {
    $cursoDAO->getCurso()->setNome($_POST['nomeCursoText']);
    $cursoDAO->getCurso()->setModalidade($_POST['modalidadeCursoText']);

    if ($cursoDAO->queryInsert() == 'ok') {
        header("location: http://localhost/PROJETO_VERSAO_3.0/AreaAdministrativa.php");
    } else {
        echo '<script type="text/javascript"> alert("Erro ao cadastrar Curso!") </script>';
    }
}
?>