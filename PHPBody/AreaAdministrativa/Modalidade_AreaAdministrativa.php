<?php
//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/ModalidadeDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/NivelDAO.php';

//ESTANCIANDO A CLASSE
$modalidadeDAO = new ModalidadeDAO();
$modalidades = $modalidadeDAO->querySelect();
$modalidadeNome = "";

$nivelDAO = new NivelDAO();
$niveis = $nivelDAO->querySelect();
?>

<br/>
<!-- CADASTRO E APRESENTAÇÃO DAS MODALIDADES ---------------------------------->
<form action="" id="modalidadeForm" method="post">
    <input type="text" id="ModalidadeID" value="" hidden/>
    <input type="text" id="nomeModalidadeText" value="<?= $modalidadeNome ?>" placeholder="Modalidade" required/>

    <p>
        <select class="browser-default z-depth-2" id="nivelSelect" required>
            <option value="" disabled selected>Selecione um Nivel</option> 
            <?php foreach ($niveis as $result) { ?>
                <option value="<?= $result['id'] ?>"><?= $result['nome'] ?></option> 
            <?php } ?> 
        </select>
        <br/>
    </p>

    <p><input class="btn right green darken-4" type="submit" id="cadastrarModalidadeButton" value="Cadastrar Modalidade"/></br></br></p>
</form>

<table cellpadding="1" cellspacing="1" class="responsive-table bordered striped centered highlight flow-text z-depth-3" id="tabelaModalidade" style="border-style: solid;border-width: 1px;border-color: black;">
    <thead>
        <tr class="grey lighten-1 center-align">
            <th>Nome</th>
            <th>Nivel</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($modalidades as $result) { ?>
            <tr>
                <td><?= $result[1] ?></td>
                <td><?= $result[2] ?></td>

                <td>
                    <button class="btn tooltipped green modal-trigger darken-4" href="#modalExcluir<?= $result[0] ?>"  data-tooltip="Excluir Modalidade" data-position="bottom"> <i class="material-icons">delete</i> </button>
                    <button class="btn tooltipped green darken-4" onclick="plotarModalidade('<?= $result[0] ?>')"  data-tooltip="Editando Modalidade ..." data-position="bottom"> <i class="material-icons">edit</i> </button>
                </td>
            </tr>

            <!-- Modal Structure -->
        <div id="modalExcluir<?= $result[0] ?>" class="modal bottom-sheet">
            <div class="modal-content">
                <h4>Deseja excluir a Modalidade <u><?= $result[1] ?></u>?
                    <b><a onclick="excluirModalidade(<?= $result['id'] ?>);" class="modal-close black-text">Sim</a></b> ou
                    <b><a href="#!" class="modal-close black-text">Não</a></b>
                </h4>
                <p></p>
            </div>
        </div>
    <?php } ?>
</tbody>
</table>
</br></br>
<div class="col-md-12 center text-center">
    <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="paginaModalidade"></ul>
</div>


<script>
    $('.tooltipped').tooltip();
    $('.modal').modal();

    $('#tabelaModalidade').pageMe({
        pagerSelector: '#paginaModalidade',
        activeColor: 'green darken-4',
        prevText: 'Retroceder',
        nextText: 'Avançar',
        showPrevNext: true,
        hidePageNumbers: false,
        perPage: 3
    });

    $('form#modalidadeForm').submit(function () {
        var id = $("#ModalidadeID").val();
        var nome = $("#nomeModalidadeText").val();
        var nivel = $("#nivelSelect").val();

        if ($("#cadastrarModalidadeButton").val() === "Cadastrar Modalidade") {
            $.ajax({
                url: 'PHPAjax/Request_AreaAdm.php',
                type: 'POST',
                data: "acao=Cadastrar&" + "CRUD=Modalidade&" + "nome=" + nome + "&nivel=" + nivel
            }).done(function (data) {
                if (data === "ok") {
                    renderizarTudo();
                    M.toast({html: "Modalidade Cadastrada", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarTudo();
                    M.toast({html: "Erro ao cadastrar Modalidade", classes: 'rounded', displayLength: 3000});
                }
            });
        } else {
            $.ajax({
                url: 'PHPAjax/Request_AreaAdm.php',
                type: 'POST',
                data: "acao=Salvar&" + "CRUD=Modalidade&" + "id=" + id + "&nome=" + nome + "&nivel=" + nivel
            }).done(function (data) {
                if (data === "ok") {
                    renderizarTudo();
                    M.toast({html: "Modalidade Atualizada", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarTudo();
                    M.toast({html: "Erro ao atualizar Modalidade", classes: 'rounded', displayLength: 3000});
                }
            });
        }

        return false;
    });
</script>
