<?php
//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/NivelDAO.php';

//ESTANCIANDO A CLASSE
$nivelDAO = new NivelDAO();
$niveis = $nivelDAO->querySelect();

$nomeNivelText = "";
?>

<div class="col s12 l12 container"><br/>
    <!-- CADASTRO E APRESENTAÇÃO DOS NIVEIS --------------------------------------->
    <form action="" id="nivelForm" method="post">
        <input type="text" id="nivelID" value="" hidden/>
        <input type="text" id="nomeNivelText" value="<?= $nomeNivelText ?>" placeholder="Nível" required=""/>
        <p><input class="btn right grey darken-3" type="submit" id="cadastrarNivelButton" value="Cadastrar Nível"/></p>

    </form>

    <div><p></br></br></br></br></br></p></div>

    <table cellpadding="1" cellspacing="1" class="responsive-table bordered centered highlight z-depth-3 grey darken-1" id="tabelaNivel" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>
            <tr class="grey center-align">
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($niveis as $result) { ?>

                <tr>
                    <td><?= $result['nome'] ?></td>

                    <td>
                        <button class="btn tooltipped modal-trigger grey darken-3" href="#modalExcluir<?= $result[0] ?>"  data-tooltip="Excluir Nível" data-position="top"> <i class="material-icons">delete</i> </button>
                        <button class="btn tooltipped grey darken-3" onclick="plotarNivel('<?= $result[0] ?>')"  data-tooltip="Editar Nível" data-position="bottom"> <i class="material-icons">edit</i> </button>
                    </td>
                </tr>


                <!-- Modal Structure -->
            <div id="modalExcluir<?= $result[0] ?>" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4>Deseja excluir o Nível <u><?= $result['nome'] ?></u>?
                        <b><a onclick="excluirNivel(<?= $result['id'] ?>);" class="modal-close black-text">Sim</a></b> ou
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
        <ul class="pagination pager" id="paginaNivel"></ul>
    </div>
</div>


<script>
    $('.tooltipped').tooltip();
    $('.modal').modal();

    $('#tabelaNivel').pageMe({
        pagerSelector: '#paginaNivel',
        activeColor: 'green darken-4',
        prevText: 'Retroceder',
        nextText: 'Avançar',
        showPrevNext: true,
        hidePageNumbers: false,
        perPage: 3
    });

    $('form#nivelForm').submit(function () {
        var id = $("#nivelID").val();
        var nome = $("#nomeNivelText").val();

        if ($("#cadastrarNivelButton").val() === "Cadastrar Nível") {
            $.ajax({
                url: 'PHPAjax/Request_AreaAdm.php',
                type: 'POST',
                data: "acao=Cadastrar&" + "CRUD=Nivel&" + "nome=" + nome
            }).done(function (data) {
                if (data === "ok") {
                    renderizarTudo();
                    M.toast({html: "Nível Cadastrado", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarTudo();
                    M.toast({html: "Erro ao cadastrar Nível", classes: 'rounded', displayLength: 3000});
                }
            });
        } else {
            $.ajax({
                url: 'PHPAjax/Request_AreaAdm.php',
                type: 'POST',
                data: "acao=Salvar&" + "CRUD=Nivel&" + "id=" + id + "&nome=" + nome
            }).done(function (data) {
                if (data === "ok") {
                    renderizarTudo();
                    M.toast({html: "Nível Atualizado", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarTudo();
                    M.toast({html: "Erro ao atualizar Nível", classes: 'rounded', displayLength: 3000});
                }
            });

        }

        return false;
    });
</script>
