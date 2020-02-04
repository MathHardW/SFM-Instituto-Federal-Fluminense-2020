<?php
//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/CursoDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/NivelDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/ModalidadeDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/AcompanhamentoDAO.php';

//ESTANCIANDO A CLASSE
$acompanhamentoDAO = new AcompanhamentoDAO();

$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_NUMBER_INT);
$acompanhamentos = $acompanhamentoDAO->querySelectPesquisa($texto);

$nivelDAO = new NivelDAO();

$modalidadeDAO = new ModalidadeDAO();

$cursoDAO = new CursoDAO();
$cursos = $cursoDAO->querySelect();

$dataAtual = date("d/m/Y");
?>

<div class="col s12 l12 grey" style="border-radius: 20px 20px 0px 0px;border-style: solid; border-width: 0px 0px 1px 1px; height: 20px;"></div>

<div class="col s12 l12 container center"> <br/>
    <form action="" id="acompanhamentosGeraisForm" method="post" onsubmit="return false;">
        <input type="text" id="acompanhamentoID" hidden/>

        <!---------------------------------------------------------------------------------------------------------------------------->
        <div class="row">
            <div class="col s12 l6">
                <input type="text" name="tituloText" id="tituloText" placeholder="Titulo" class="" required/>
            </div>
            <div class="col s12 l6">
                <input type="text" name="servidorText" id="servidorText" placeholder="Servidor" class="" required>
            </div>
        </div>
        <!---------------------------------------------------------------------------------------------------------------------------->
        <div class="row">
            <div class="col s6 l6">
                <input type="text" name="dataInicioText" id="dataInicioText" placeholder="Data Inicio" class="datepicker" required readonly>
            </div>
            <div class="col s6 l6">
                <input type="text" name="dataFimText" id="dataFimText" placeholder="Data Fim" class="datepicker" required readonly>
            </div>
        </div>
        <!---------------------------------------------------------------------------------------------------------------------------->
        <div class="row">
            <div class="col s12 l6">
                <input type="number" min='0' name="alunosIniciaisText" id="alunosIniciaisText" placeholder="Alunos Iniciais" class="" required>
            </div>
            <div class="hide-on-med-and-up"><br/><br/><br/><br/></div>
            <div class="col s6 l3">
                <select class="browser-default white z-depth-3" name="periodoText" id="periodoText" class="" required>
                    <option value="" disabled selected>Escolha um Semestre.</option>
                    <option value="0">1º Semestre</option>
                    <option value="1">2º Semestre</option> 
                </select>
            </div>
            <div class="col s6 l3">
                <select class="browser-default white z-depth-3" name="cursoText" id="cursoText" class="" required>
                    <option value="" disabled selected>Escolha um curso.</option>
                    <?php foreach ($cursos as $result) { ?>
                        <option value="<?= $result[0] ?>"> 
                            <?= $result[3] . ' ' . $result[2] . ' em ' . $result[1] . '.' ?>
                        </option>    
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col s12 l12">
                <input type="submit" class="btn right grey darken-3" id="cadastrarAcompanhamentoButton" value="Cadastrar Acompanhamento"/>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col s12 m12 l12">
            <br/>
            <!--PESQUISA DE FICHAS-->
            <select class="browser-default js-example-basic-single" id="pesquisaAcompanhamento">
                <option value="" disabled selected="">Qual acompanhamento você está procurando?</option>
                <?php foreach ($acompanhamentoDAO->querySelect() as $result) { ?>
                    <option value="<?= $result[0] ?>">Este é o acompanhamento <b><?= $result[1] ?></b> administrado por <?= $result[2] ?> do curso de <?= $result[3] ?>.</option>
                <?php } ?>
            </select>
            <br/><br/>
            <table cellpadding="1" cellspacing="1" class="responsive-table bordered highlight centered flow-text z-depth-3 grey darken-2" id="tabelaAcompanhamentosGerais" style="border-style: solid;border-width: 1px;border-color: black;">
                <thead onclick="renderizarAcompanhamentosGerais();" title="Clique sobre para atualizar a tabela.">
                    <tr class="grey darken-2 white-text">
                        <th>Título</th>
                        <th>Servidor</th>
                        <th>Curso</th>
                        <th>Data Ínicio</th>
                        <th>Data Fim</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($acompanhamentos as $result) { ?>
                        <tr class="grey darken-1">
                            <td><?= $result[1] ?></td>
                            <td><?= $result[2] ?></td>
                            <td><?= $result[3] ?></td>
                            <td><?= $result[4] ?></td>
                            <td><?= $result[5] ?></td>
                            <td><?php
                                if ($result['status'] == 1) {
                                    echo "<i class='material-icons red-text'>layers</i>";
                                } else {
                                    echo "<i class='material-icons green-text'>layers_clear</i>";
                                }
                                ?></td>
                            <td>
                                <button class="btn tooltipped modal-trigger grey darken-3" href="#modalExcluir<?= $result[0] ?>"  data-tooltip="Excluir Acompanhamento" data-position="top" <?php
                                if ($result['status'] == 1) {
                                    echo "disabled";
                                }
                                ?>> <i class="material-icons">delete</i> </button>

                                <button class="btn tooltipped modal-trigger grey darken-3" onclick="plotarAcompanhamento('<?= $result[0] ?>')"  data-tooltip="Editar Acompanhamento" data-position="bottom" <?php
                                if ($result['status'] == 1) {
                                    echo "disabled";
                                }
                                ?>> <i class="material-icons">edit</i> </button>

                                <button class="btn tooltipped grey darken-3" onclick="FinalizarAcompanhamento('<?= $result[0] ?>')"  data-tooltip="Finalizar Acompanhamento" data-position="top" <?php
                                if ($result['status'] == 1) {
                                    echo "disabled";
                                }
                                ?>> <i class="material-icons">done_all</i> </button>

                                <a href="?seleciona=<?= $result[0] ?>" class="btn tooltipped grey darken-3" data-position="bottom" data-tooltip="Visualizar Acompanhamento" name="btn-editarAcompanhamento">
                                    <i class="material-icons">send</i>
                                </a>
                            </td>
                        </tr>

                        <!-- Modal Structure -->
                    <div id="modalExcluir<?= $result[0] ?>" class="modal bottom-sheet">
                        <div class="modal-content">
                            <h4>Deseja excluir o Acompanhamento <u><?= $result['titulo'] ?></u>?
                                <b><a onclick="excluirAcompanhamento(<?= $result['id'] ?>);" class="modal-close black-text">Sim</a></b> ou
                                <b><a href="#!" class="modal-close black-text">Não</a></b>
                            </h4>
                            <p></p>
                        </div>
                    </div>
                <?php } ?> 
                </tbody>
            </table>
            <div class="col-md-12 center text-center white-text">
                <span class="left" id="total_reg"></span>
                <ul class="pagination pager" id="paginaAcompanhamentoGerais"></ul>
            </div>
        </div>
    </div>
</div>

<div class="col s12 l12 grey" style="border-radius: 0px 0px 20px 20px;border-style: solid; border-width: 1px 1px 0px 0px; height: 20px;"></div>


<script>
    $('.tooltipped').tooltip();
    $('.modal').modal();
    $('.js-example-basic-single').select2();
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('#tabelaAcompanhamentosGerais').pageMe({
        pagerSelector: '#paginaAcompanhamentoGerais',
        activeColor: 'green darken-4',
        prevText: 'Retroceder',
        nextText: 'Avançar',
        showPrevNext: true,
        hidePageNumbers: false,
        perPage: 3
    });

    $("#pesquisaAcompanhamento").change(function () {
        M.toast({html: "Pesquisando Acompanhamento...", classes: 'rounded', displayLength: 2000});
        var texto = $(this).val();

        $("#acompanhamentosGerais").load("PHPBody/Principal/AcompanhamentosGerais_Principal.php", {texto: texto});

        return false;
    });

    function FinalizarAcompanhamento(id) {
        $.ajax({
            url: 'PHPAjax/Request_Acompanhamentos.php',
            type: 'POST',
            data: "acao=finalizarAcompanhamento&" + "id=" + id
        }).done(function (data) {
            alert("Alunos Finais :" + data);

            if (data === "ok") {
                renderizarAcompanhamentosGerais();
                M.toast({html: "Acompanhamento Finalizado!", classes: 'rounded', displayLength: 3000});
            } else {
                renderizarAcompanhamentosGerais();
                M.toast({html: "Impossível Finalizar Acompanhamento!", classes: 'rounded', displayLength: 5000});
            }
        });
        return false;
    }

    //INCLUIR OU SALVAR FICHA
    $('form#acompanhamentosGeraisForm').submit(function () {
        var id = document.getElementById('acompanhamentoID').value;
        var cadastrarAcompanhamentoElement = document.getElementById('cadastrarAcompanhamentoButton').value;
        var formAcompanhamentosGerais = $(this);

        alert(id + " " + formAcompanhamentosGerais.serialize());

        switch (cadastrarAcompanhamentoElement) {
            case "Cadastrar Acompanhamento":
                $.ajax({
                    url: 'PHPAjax/Request_Acompanhamentos.php',
                    type: 'POST',
                    data: "acao=Cadastrar&" + formAcompanhamentosGerais.serialize()
                }).done(function (retorno) {
                    if (retorno === "ok") {
                        renderizarAcompanhamentosGerais();
                        M.toast({html: 'Acompanhamento Cadastrado', classes: 'rounded', displayLength: 3000});
                    } else {
                        renderizarAcompanhamentosGerais();
                        M.toast({html: 'Impossível Cadastrar Acompanhamento', classes: 'rounded', displayLength: 3000});
                    }
                });
                break;
            case "Salvar Acompanhamento":
                $.ajax({
                    url: 'PHPAjax/Request_Acompanhamentos.php',
                    type: 'POST',
                    data: "acao=Salvar&" + formAcompanhamentosGerais.serialize() + "&id=" + id
                }).done(function (retorno) {
                    if (retorno === "ok") {
                        renderizarAcompanhamentosGerais();
                        M.toast({html: 'Acompanhamento Atualizado', classes: 'rounded', displayLength: 3000});
                    } else {
                        renderizarAcompanhamentosGerais();
                        M.toast({html: 'Impossível Atualizar Acompanhamento', classes: 'rounded', displayLength: 3000});
                    }
                });
                break;
            default:
                M.toast({html: 'Operação Inválida', classes: 'rounded', displayLength: 3000});
                renderizarTodos();
                break;
        }

        return false;
    });
</script>
