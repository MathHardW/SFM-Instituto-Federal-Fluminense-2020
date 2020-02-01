<?php
require_once 'PHPHeader/AcompanhamentosGeraisHeader.php';

//BUSCANDO A CLASSSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/UsuarioDAO.php';

//ESTANCIANDO
$usuarioDAO = new UsuarioDAO();

//VALIDANDO O USUÁRIO
session_start();
if (isset($_SESSION['logado']) == "logado") {
    header("location: /PROJETO_VERSAO_3.0/AcompanhamentosGerais.php");
}
?>

<html>
    <head>
        <?php require_once 'PHPHeader/Head.php'; ?>
        <title>Área Administrativa</title>
    </head>
    <body>
        <header>
            <div class="navbar-fixed green darken-4">
                <nav>
                    <div class="nav-wrapper green darken-4">                                 
                        <a href="index.php" class="brand-logo center"><img src="IMG/logo2.png" width="105px"></a>
                    </div>
                </nav>
            </div>
        </header>  

        <main>
            <div id="formUsuario"></div>
            <div id="formRegistro"></div>
        </main>
        <div class="col s12 l12 green darken-4 left" style="border-width: 2px 0px 0px 0px; border-style: solid; height: 50px;"></div>

        <script type="text/javascript" src="JS/materialize.js"></script>
        <script type="text/javascript" src="JSAjax/ajaxUsuario.js"></script>
    </body>
</html>