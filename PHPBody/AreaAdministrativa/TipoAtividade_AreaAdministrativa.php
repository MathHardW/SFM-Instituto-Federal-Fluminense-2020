<?php
//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/TipoAtividadeDAO.php';

//ESTANCIANDO A CLASSE
$tipoAtividadeDAO = new TipoAtividadeDAO();
$tiposDeAtividades = $tipoAtividadeDAO->querySelect();

$nomeTipoAtividade = "";
$descricaoTipoAtividade = "";
?>
<br/>
<form action="" id="tipoAtividadeForm" method="post">
    <input type="text" id="TipoAtividadeID" value="" hidden/>
    <input type="text" id="nomeTipoAtividadeText" value="<?= $nomeTipoAtividade ?>" placeholder="Tipo de Atividade" required/>
    <input type="text" id="descricaoTipoAtividadeText" value="<?= $descricaoTipoAtividade ?>" placeholder="Descrição" required/>
    <p><input type="submit" class="btn right green darken-4" id="cadastrarTipoAtividadeButton" value="Cadastrar Tipo de Atividade"/></p>
</form>
<br/>
<div class="col s12 l12 container"><br/>
    <table cellpadding="1" cellspacing="1" class="responsive-table bordered striped centered highlight flow-text z-depth-3" id="tabelaTipoAtividade" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>                                    
            <tr class="grey lighten-1 center-align">
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposDeAtividades as $result) { ?>
                <tr>
                    <td><?= $result['nome'] ?></td>
                    <!--<td></td>-->
                    <td><a class="waves-effect waves-light btn modal-trigger tooltipped green darken-4" data-position="bottom" data-tooltip="Descrição do Tipo de Atividade" href="#modalTipoAtividade<?= $result[0] ?>"><i class="material-icons">description</i></a></td>
                    <td>
                        <button class="btn tooltipped green modal-trigger darken-4" href="#modalExcluir<?= $result[0] ?>"  data-tooltip="Excluir Tipo de Atividade" data-position="bottom"> <i class="material-icons">delete</i> </button>

                        <button class="btn tooltipped green darken-4" onclick="plotarTipoAtividade('<?= $result[0] ?>')"  data-tooltip="Editar Tipo de Atividade" data-position="bottom"> <i class="material-icons">edit</i> </button>

                    </td>
                </tr>

                <!-- Modal Structure -->
            <div id="modalTipoAtividade<?= $result[0] ?>" class="modal">
                <div class="modal-content">
                    <h4>Descrição do Tipo Atividade</h4>
                    <p><?= $result['descricao'] ?></p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">X</a>
                </div>
            </div>

            <!-- Modal Structure -->
            <div id="modalExcluir<?= $result[0] ?>" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4>Deseja excluir o Tipo de Atividade <u><?= $result['nome'] ?></u>?
                        <b><a onclick="excluirTipoAtividade(<?= $result['id'] ?>);" class="modal-close black-text">Sim</a></b> ou
                        <b><a href="#!" class="modal-close black-text">Não</a></b>
                    </h4>
                    <p></p>
                </div>
            </div>
        <?php } ?>
        </tbody>
    </table>
    </br></br>
</div>
<br/>
<div class="col-md-12 center text-center">
    <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="paginaTipoAtividade"></ul>
</div>

<script>
    $('.tooltipped').tooltip();
    $('.modal').modal();

    $('#tabelaTipoAtividade').pageMe({
        pagerSelector: '#paginaTipoAtividade',
        activeColor: 'green darken-4',
        prevText: 'Retroceder',
        nextText: 'Avançar',
        showPrevNext: true,
        hidePageNumbers: false,
        perPage: 3
    });

    $('form#tipoAtividadeForm').submit(function () {
        var id = $("#TipoAtividadeID").val();
        var nome = $("#nomeTipoAtividadeText").val();
        var descricao = $("#descricaoTipoAtividadeText").val();

        if ($("#cadastrarTipoAtividadeButton").val() === "Cadastrar Tipo de Atividade") {
            $.ajax({
                url: 'PHPAjax/Request_AreaAdm.php',
                type: 'POST',
                data: "acao=Cadastrar&" + "CRUD=TipoAtividade&" + "nome=" + nome + "&descricao=" + descricao
            }).done(function (data) {
                if (data === "ok") {
                    renderizarTipoAtividade();
                    M.toast({html: "Tipo de Atividade Cadastrado", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarTipoAtividade();
                    M.toast({html: "Erro ao cadastrar Tipo de Atividade", classes: 'rounded', displayLength: 3000});
                }
            });
        } else {
            $.ajax({
                url: 'PHPAjax/Request_AreaAdm.php',
                type: 'POST',
                data: "acao=Salvar&" + "CRUD=TipoAtividade&" + "id=" + id + "&nome=" + nome + "&descricao=" + descricao
            }).done(function (data) {
                if (data === "ok") {
                    renderizarTipoAtividade();
                    M.toast({html: "Tipo de Atividade Atualizado", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarTipoAtividade();
                    M.toast({html: "Erro ao atualizar Tipo de Atividade", classes: 'rounded', displayLength: 3000});
                }
            });
        }

        return false;
    });
</script>