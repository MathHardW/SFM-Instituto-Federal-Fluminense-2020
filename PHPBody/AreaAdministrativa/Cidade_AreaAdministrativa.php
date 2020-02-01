<?php
//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/CidadeDAO.php';

//ESTANCIANDO A CLASSE
$cidadeDAO = new CidadeDAO();
$cidades = $cidadeDAO->querySelect();

$nomeCidadeText = "";
$estadoCidadeText = "";
?>

<form action="">
    <input type="text" id="nomeCidadeText" value="<?= $nomeCidadeText ?>" placeholder="Cidade" required/>
    <input type="text" id="estadoCidadeText" value="<?= $estadoCidadeText ?>" placeholder="Estado" required/>
    <p><input class="btn right green darken-4" type="submit" id="cadastrarCidadeButton" value="Cadastrar Cidade"/></p>
</form>

<div class="col s12 l12"><br/>
    <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>
            <tr class="grey lighten-1 center-align">
                <th>Nome</th>
                <th>Estado</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cidades as $result) { ?>

                <tr>
                    <td><?= $result['nome'] ?></td>
                    <td><?= $result['estado'] ?></td>

                    <td>
                        <button class="btn tooltipped green darken-4" onclick="plotarCidade('<?= $result[0] ?>')"  data-tooltip="Editar Cidade" data-position="bottom"> <i class="material-icons">edit</i> </button>
            <?php foreach ($cidadeDAO->querySelect() as $result) { ?>

                <tr>
                    <td><?= $result['nome'] ?></td>
                    <td><?= $result['estado'] ?></td>

                    <td>
                        <a href="?edita=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Deletar Cidade" name="btn-deletarAcompanhamento">
                            <i class="material-icons">delete</i>
                        </a>

                        <a href="?excluir=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Editar Cidade" name="btn-selecionarAcompanhamento">
                            <i class="material-icons">edit</i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </br></br>
</div>

<script>
    $('.tooltipped').tooltip();
    $('.modal').modal();
</script>
