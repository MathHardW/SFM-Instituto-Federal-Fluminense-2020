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

<div class="col s12 l12 container"><br/>

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
        <p><input class="btn right grey darken-3" type="submit" id="cadastrarCursoButton" value="Cadastrar Curso"/></br></br></p>
    </form>
    <table cellpadding="1" cellspacing="1" class="responsive-table bordered centered highlight z-depth-3 grey darken-1" id="tabelaCurso" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>
            <tr class="grey center-align">
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
                        <button class="btn tooltipped modal-trigger grey darken-3" href="#modalExcluir<?= $result[0] ?>"  data-tooltip="Excluir Curso" data-position="top"> <i class="material-icons">delete</i> </button>
                        <button class="btn tooltipped grey darken-3" onclick="plotarCurso('<?= $result[0] ?>')"  data-tooltip="Editar Curso" data-position="bottom"> <i class="material-icons">edit</i> </button>
                    </td>
                </tr>

            <div id="modalExcluir<?= $result[0] ?>" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4>Deseja excluir o Curso <u><?= $result[1] ?></u>?
                        <b><a onclick="excluirCurso(<?= $result['id'] ?>);" class="modal-close black-text">Sim</a></b> ou
                        <b><a href="#!" class="modal-close black-text">Não</a></b>
                    </h4>
                    <p></p>
                </div>
            </div>
        <?php } ?>   
        </tbody>
    </table>

    <div class="col-md-12 center text-center">
        <span class="left" id="total_reg"></span>
        <ul class="pagination pager" id="paginaCurso"></ul>
    </div>
</div>



<script>
    $('.tooltipped').tooltip();
    $('.modal').modal();

    $('#tabelaCurso').pageMe({
        pagerSelector: '#paginaCurso',
        activeColor: 'green darken-4',
        prevText: 'Retroceder',
        nextText: 'Avançar',
        showPrevNext: true,
        hidePageNumbers: false,
        perPage: 3
    });

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
                data: "acao=Salvar&" + "CRUD=Curso&" + "id=" + id + "&nome=" + nome + "&modalidade=" + modalidade
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
