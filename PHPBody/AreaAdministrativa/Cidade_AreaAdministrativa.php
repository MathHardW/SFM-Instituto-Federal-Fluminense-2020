<?php
//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/CidadeDAO.php';

//ESTANCIANDO A CLASSE
$cidadeDAO = new CidadeDAO();
$cidades = $cidadeDAO->querySelect();

$nomeCidadeText = "";
$estadoCidadeText = "";
?>


<div class="col s12 l12">
    <br/>
    <form action="" id="cidadeForm" method="post">
        <input type="text" id="cidadeID" value="" hidden/>
        <input type="text" id="nomeCidadeText" value="<?= $nomeCidadeText ?>" placeholder="Cidade" required/>
        <input type="text" id="estadoCidadeText" value="<?= $estadoCidadeText ?>" placeholder="Estado" required/>
        <p><input class="btn right grey darken-3" type="submit" id="cadastrarCidadeButton" value="Cadastrar Cidade"/></p>
        <br/><br/><br/>
    </form>

    <table cellpadding="1" cellspacing="1" class="responsive-table bordered centered highlight z-depth-3 grey darken-1" id="tabelaCidade" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>
            <tr class="grey center-align">
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
                        <button class="btn tooltipped modal-trigger grey darken-3" href="#modalExcluir<?= $result[0] ?>"  data-tooltip="Excluir Cidade" data-position="top"> <i class="material-icons">delete</i> </button>
                        <button class="btn tooltipped grey darken-3" onclick="plotarCidade('<?= $result[0] ?>')"  data-tooltip="Editar Cidade" data-position="bottom"> <i class="material-icons">edit</i> </button>
                    </td>
                </tr>

            <div id="modalExcluir<?= $result[0] ?>" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4>Deseja excluir a Cidade <u><?= $result['nome'] ?></u>?
                        <b><a onclick="excluirCidade(<?= $result['id'] ?>);" class="modal-close black-text">Sim</a></b> ou
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
        <ul class="pagination pager" id="paginaCidade"></ul>
    </div>
</div>

<script>
    $('.tooltipped').tooltip();
    $('.modal').modal();

    $('#tabelaCidade').pageMe({
        pagerSelector: '#paginaCidade',
        activeColor: 'green darken-4',
        prevText: 'Retroceder',
        nextText: 'Avançar',
        showPrevNext: true,
        hidePageNumbers: false,
        perPage: 3
    });

    $('form#cidadeForm').submit(function () {
        var id = $("#cidadeID").val();
        var nome = $("#nomeCidadeText").val();
        var estado = $("#estadoCidadeText").val();

        if ($("#cadastrarCidadeButton").val() === "Cadastrar Cidade") {
            $.ajax({
                url: 'PHPAjax/Request_AreaAdm.php',
                type: 'POST',
                data: "acao=Cadastrar&" + "CRUD=Cidade&" + "nome=" + nome + "&estado=" + estado
            }).done(function (data) {
                if (data === "ok") {
                    renderizarTudo();
                    M.toast({html: "Cidade Cadastrada", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarTudo();
                    M.toast({html: "Erro ao cadastrar Cidade", classes: 'rounded', displayLength: 3000});
                }
            });
        } else {
            $.ajax({
                url: 'PHPAjax/Request_AreaAdm.php',
                type: 'POST',
                data: "acao=Salvar&" + "CRUD=Cidade&" + "id=" + id + "&nome=" + nome + "&estado=" + estado
            }).done(function (data) {
                if (data === "ok") {
                    renderizarTudo();
                    M.toast({html: "Cidade Atualizada", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarTudo();
                    M.toast({html: "Erro ao atualizar Cidade", classes: 'rounded', displayLength: 3000});
                }
            });

        }

        return false;
    });
</script>