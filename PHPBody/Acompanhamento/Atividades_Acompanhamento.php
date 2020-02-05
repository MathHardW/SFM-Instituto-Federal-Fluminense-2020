<?php
//IMPORTANDO AS CLASSES---------------------------------------------------------
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/AcompanhamentoDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/AtividadeDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/TipoAtividadeDAO.php';

//------------------------------------------------------------------------------    
//ESTANCIANDO A CLASSE----------------------------------------------------------
$atividadeDAO = new AtividadeDAO();
$tipoAtividadeDAO = new TipoAtividadeDAO();
//------------------------------------------------------------------------------
$atividadeDAO->getAtividade()->setAcompanhamento(filter_input(INPUT_POST, 'acompanhamento'));

$pesquisa = filter_input(INPUT_POST, 'texto');
$atividades = $atividadeDAO->querySelect($pesquisa);

$acompanhamentoDAO = new AcompanhamentoDAO();

$status = $acompanhamentoDAO->querySelectiD(filter_input(INPUT_POST, 'acompanhamento'))[0]['status'];

$block = 0;
if ($status == 1) {
    $block = "disabled";
}
?>

<div class="col s12 l12">
    </br>
    <form id="atividadeForm" action="" method="post">
        <input type="text" value="" hidden name="idAtividade" id="AtividadeID"> 
        <input type="text" value="<?= filter_input(INPUT_POST, 'acompanhamento') ?>" hidden name="acompanhamentoAtividade" id="acompanhamentoAtividade"> 

        <div class="row">
            <div class="col s12 l12">
                <select class="browser-default  z-depth-2" name="tipoAtividadeText" id="SelectAtividade" <?= $block ?>>
                    <option value="" disabled selected>Tipo de Atividade</option>
                    <?php foreach ($tipoAtividadeDAO->querySelect() as $result) { ?>
                        <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
                    <?php } ?> 
                </select>            
            </div>
        </div>  

        <div class="row">
            <div class="col s12 l6">
                <textarea class="materialize-textarea" data-length="10" placeholder="Título" name="tituloText" id="tituloText" required <?= $block ?>></textarea>
            </div>
            <div class="col s12 l6">
                <textarea class="materialize-textarea" data-length="120" placeholder="Servidor" name="servidorText" id="servidorText" <?= $block ?>></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col s12 l6">
                <textarea class="materialize-textarea" data-length="120" placeholder="Descrição" name="descricaoText" id="descricaoText" <?= $block ?>></textarea>
            </div>
            <div class="col s12 l6">
                <textarea class="materialize-textarea" data-length="120" placeholder="Público Alvo" name="publicoAlvoText" id="publicoAlvoText" <?= $block ?>></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col s12 l6">
                <textarea class="materialize-textarea" data-length="120" placeholder="Resultados Esperados" name="resultadosEsperadosText" id="resultadosEsperadosText" <?= $block ?>></textarea>
            </div>
            <div class="col s12 l6">
                <textarea class="materialize-textarea" data-length="120" placeholder="Resultados Obtidos" name="resultadosObtidosText" id="resultadosObtidosText" <?= $block ?>></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col s12 l6">
                <input type="text" class="datepicker" placeholder="Data Início da Atividade" id="dataInicioText" required readonly <?= $block ?>>
            </div>
            <div class="col s12 l6">
                <input type="text" class="datepicker" placeholder="Data Fim da Atividade" id="dataFimText" required readonly <?= $block ?>>
            </div>
        </div>

        </br>
        <input type="submit" class="btn grey darken-3 white-text" value="Incluir Atividade" id="incluirAtividadeButton" <?= $block ?> style="width:100%;"/>

    </form>

    <br/><br/><br/>
    <table cellpadding="1" cellspacing="1" class="responsive-table bordered centered highlight z-depth-3 grey darken-1" id="tabelaAtividade" style="border-style: solid;border-width: 1px;border-color: black;">
        <tr class="grey center-align" onclick="renderizarTodos()" title="Clique para atualizar a tabela.">
            <td><b>Título</b></td>
            <td><b>Servidor</b></td>
            <td><b>Publíco<br/>Alvo</b></td>
            <td><b>Descrição</b></td>
            <td><b>Resultados<br/>Esperados</b></td>
            <td><b>Resultados<br/>Obtidos</b></td>
            <td><b>Início</b></td>
            <td><b>Fim</b></td>
            <td><b>Tipo de Atividade</b></td>
            <td><b>Ações</b></td>
        </tr>
        <?php foreach ($atividades as $result) { ?>
            <tr>
                <td><h6><b><?= $result[1] ?></b></h6></td>
                <td><?= $result[2] ?></td>
                <td><?= $result[4] ?></td>
                <td><a class="waves-effect waves-light btn modal-trigger grey darken-3" href="#modalD<?= $result[0] ?>"><i class="material-icons">description</i></a></td>
                <td><a class="waves-effect waves-light btn modal-trigger grey darken-3" href="#modalRE<?= $result[0] ?>"><i class="material-icons">dvr</i></a></td>
                <td><a class="waves-effect waves-light btn modal-trigger grey darken-3" href="#modalRO<?= $result[0] ?>"><i class="material-icons">flag</i></a></td>
                <td><?= $result[7] ?></td>
                <td><?= $result[8] ?></td>
                <td><?= $result[12] ?></td>
                <td>
                    <button class="btn tooltipped grey darken-3 modal-trigger" href="#modalExcluirA<?= $result[0] ?>" data-tooltip="Excluir Atividade" data-position="top" <?= $block ?>> <i class="material-icons">delete</i> </button>
                    <button class="btn tooltipped grey darken-3" onclick="plotarAtividade(<?= $result[0] ?>)" data-tooltip="Editar Atividade" data-position="bottom" <?= $block ?>> <i class="material-icons">edit</i> </button>
                </td>
            </tr>

            <!-- Modal Structure -->
            <div id="modalD<?= $result[0] ?>" class="modal">
                <div class="modal-content">
                    <h4>Descrição da Atividade</h4>
                    <p><?= $result[3] ?></p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">X</a>
                </div>
            </div>

            <!-- Modal Structure -->
            <div id="modalRE<?= $result[0] ?>" class="modal">
                <div class="modal-content">
                    <h4>Resultados Esperados</h4>
                    <p><?= $result[5] ?></p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">X</a>
                </div>
            </div>

            <!-- Modal Structure -->
            <div id="modalRO<?= $result[0] ?>" class="modal">
                <div class="modal-content">
                    <h4>Resultados Obtidos</h4>
                    <p><?= $result[6] ?></p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">X</a>
                </div>
            </div>

            <div id="modalExcluirA<?= $result[0] ?>" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4>Deseja excluir a Atividade <u><?= $result[1] ?></u>?
                        <b><a onclick="deletarAtividade(<?= $result[0] ?>);" class="modal-close black-text">Sim</a></b> ou
                        <b><a href="#!" class="modal-close black-text">Não</a></b>
                    </h4>
                    <p></p>
                </div>
            </div>
        <?php } ?> 
    </table>
    <br/>
    <div class="col-md-12 center text-center">
        <span class="left" id="total_reg"></span>
        <ul class="pagination pager" id="paginaAtividade"></ul>
    </div>
</div>

<script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('.tooltipped').tooltip();
    $('.js-example-basic-single').select2();
    $('.modal').modal();

    $('#tabelaAtividade').pageMe({
        pagerSelector: '#paginaAtividade',
        activeColor: 'green darken-4',
        prevText: 'Anterior',
        nextText: 'Seguinte',
        showPrevNext: true,
        hidePageNumbers: false,
        perPage: 5
    });

    $('form#atividadeForm').submit(function () {
        var id = $("#AtividadeID").val();

        var tipoAtividade = $("#SelectAtividade").val();
        var titulo = $("#tituloText").val();
        var servidor = $("#servidorText").val();
        var descricao = $("#descricaoText").val();
        var publicoAlvo = $("#publicoAlvoText").val();
        var resultadosEsperados = $("#resultadosEsperadosText").val();
        var resultadosObtidos = $("#resultadosObtidosText").val();
        var dataInicio = $("#dataInicioText").val();
        var dataFim = $("#dataFimText").val();

        var acompanhamento = $("#acompanhamentoAtividade").val();

        if ($("#incluirAtividadeButton").val() === "Incluir Atividade") {
            $.ajax({
                url: 'PHPAjax/Request_Atividade.php',
                type: 'POST',
                data: "acao=incluirAtividade" + "&tipoAtividade=" + tipoAtividade
                        + "&titulo=" + titulo
                        + "&servidor=" + servidor
                        + "&descricao=" + descricao
                        + "&publicoAlvo=" + publicoAlvo
                        + "&resultadosEsperados=" + resultadosEsperados
                        + "&resultadosObtidos=" + resultadosObtidos
                        + "&dataInicio=" + dataInicio
                        + "&dataFim=" + dataFim
                        + "&acompanhamento=" + acompanhamento
            }).done(function (data) {
                if (data === "ok") {
                    renderizarAtividades();
                    M.toast({html: "Atividade Incluída", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarAtividades();
                    M.toast({html: "Erro ao Incluir Atividade" + "\n" + data, classes: 'rounded', displayLength: 10000});
                }
            });
        } else {
            $.ajax({
                url: 'PHPAjax/Request_Atividade.php',
                type: 'POST',
                data: "acao=salvarAtividade"
                        + "&id=" + id
                        + "&tipoAtividade=" + tipoAtividade
                        + "&titulo=" + titulo
                        + "&servidor=" + servidor
                        + "&descricao=" + descricao
                        + "&publicoAlvo=" + publicoAlvo
                        + "&resultadosEsperados=" + resultadosEsperados
                        + "&resultadosObtidos=" + resultadosObtidos
                        + "&dataInicio=" + dataInicio
                        + "&dataFim=" + dataFim
            }).done(function (data) {
                if (data === "ok") {
                    renderizarAtividades();
                    M.toast({html: "Atividade Atualizada", classes: 'rounded', displayLength: 3000});
                } else {
                    renderizarAtividades();
                    M.toast({html: "Erro ao atualizar Atividade", classes: 'rounded', displayLength: 3000});
                }
            });
        }

        return false;
    });
</script>