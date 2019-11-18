<?php require_once 'PHPHeader/AcompanhamentosGeraisHeader.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
        <?php require_once 'PHPHeader/Head.php'; ?>
        <title>Área Administrativa</title>
    </head>
    <body>
        <!-- NESTA ÁREA SERÁ POSSIVEL CADASTRAR UM ACOMPANHAMENTO, PESQUISAR COM OS INDICES SIMPLES E SELECIONAR UM INDIVIDUAL-->
        <h3>--- ACOMPANHAMENTOS GERAIS ---</h3>
        <form action="" method="POST"><?php require_once 'PHPBody/AcompanhamentosGeraisCadastroBody.php'; ?></form>
        <form action="" method="POST"><?php require_once 'PHPBody/AcompanhamentosGeraisTableBody.php'; ?></form>    
    </body>
</html>
