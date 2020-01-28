<?php
//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/CursoDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/ModalidadeDAO.php';

//ESTANCIANDO A CLASSE
$cursoDAO = new CursoDAO();
$cursos = $cursoDAO->querySelect();
$nomeCursoText = "";

$modalidadeDAO = new ModalidadeDAO();
$modalidades = $modalidadeDAO->querySelect();
?>

<form action="" id="cursoForm" method="post">
    <input type="text" id="CursoID" value="" hidden/>
    <input type="text" id="nomeCursoText" value="<?= $nomeCursoText ?>" placeholder="Curso"/>

    <p>
        <select class="browser-default z-depth-2" id="ModalidadeSelect" required>
            <option value="" disabled selected>Selecione uma Modalidade</option> 
            <?php foreach ($modalidades as $result) { ?>
                <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
            <?php } ?> 
        </select>
        <br/>
    </p>
    <input class="btn right green darken-4" type="submit" id="cadastrarCursoButton" value="Cadastrar Curso"/>
</form>

<div class="col s12 l12"><br/>
    <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>
            <tr class="grey lighten-1 center-align">
                <th>Nome</th>
                <th>Modalidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $result) { ?>
                <tr>
                    <td><?= $result[1] ?></td>
                    <td><?= $result[2] ?></td>

                    <td>
                        <button class="btn tooltipped green darken-4" onclick="plotarCurso('<?= $result[0] ?>')"  data-tooltip="Editar Curso" data-position="bottom"> <i class="material-icons">edit</i> </button>
                    </td>
                </tr>
            <?php } ?>   
        </tbody>
    </table>
</div>
</br></br>

<script>
    $('form#cursoForm').submit(function () {
        var id = $("#CursoID").val();
        var nome = $("#nomeCursoText").val();
        var modalidade = $("#ModalidadeSelect").val();


        if ($("#cadastrarCursoButton").val() === "Cadastrar Curso") {
            $.ajax({
                url: 'PHPAjax/Request_AreaAdm.php',
                type: 'POST',
                data: "acao=Cadastrar&" + "CRUD=Curso&" + "nome=" + nome + "&modalidade=" + modalidade
            }).done(function (data) {
                if (data === "ok") {
                    renderizarTudo();
                    M.toast({html: "Curso Cadastrado", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarTudo();
                    M.toast({html: "Erro ao cadastrar Curso", classes: 'rounded', displayLength: 3000});
                }
            });
        } else {
            $.ajax({
                url: 'PHPAjax/Request_AreaAdm.php',
                type: 'POST',
                data: "acao=Salvar&" + "CRUD=Curso&" + "id=" + id + "&nome=" + nome
            }).done(function (data) {
                if (data === "ok") {
                    renderizarTudo();
                    M.toast({html: "Curso Atualizado", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarTudo();
                    M.toast({html: "Erro ao atualizar Curso", classes: 'rounded', displayLength: 3000});
                }
            });
        }

        return false;
    });
</script>