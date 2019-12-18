<?php
//IMPORTANDO AS CLASSES---------------------------------------------------------
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/AtividadeDAO.php';
//------------------------------------------------------------------------------    
//ESTANCIANDO A CLASSE----------------------------------------------------------
$atividadeDAO = new AtividadeDAO();
//------------------------------------------------------------------------------
$atividadeDAO->getAtividade()->setAcompanhamento(filter_input(INPUT_POST, 'acompanhamento'));
?>

    <br/><br/>
    <form id="form-TableAtividade" action="" method="post">
        <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaAtividade" style="border-style: solid;border-width: 1px;border-color: black;">
            <tr class="grey lighten-1">
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
            <?php foreach ($atividadeDAO->querySelect() as $result) { ?>
                <tr>
                    <td><h6><b><?= $result[1] ?></b></h6></td>
                    <td><?= $result[2] ?></td>
                    <td><?= $result[4] ?></td>
                    <td><a class="waves-effect waves-light btn modal-trigger" href="#modalD<?= $result[0] ?>"><i class="material-icons">description</i></a></td>
                    <td><a class="waves-effect waves-light btn modal-trigger" href="#modalRE<?= $result[0] ?>"><i class="material-icons">dvr</i></a></td>
                    <td><a class="waves-effect waves-light btn modal-trigger" href="#modalRO<?= $result[0] ?>"><i class="material-icons">flag</i></a></td>
                    <td><?= $result[7] ?></td>
                    <td><?= $result[8] ?></td>
                    <td><?= $result[12] ?></td>
                    <td>
                        <button class="btn tooltipped editarAtividade" id="<?= $result[0] ?>" data-tooltip="Editar Atividade" data-position="top"> <i class="material-icons">edit</i> </button>

                        <!--
                        <a href="?edita=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Selecione para Apagar Acompanhamento" name="btn-deletarAcompanhamento">
                            <i class="material-icons">delete</i>
                        </a>
                        -->
                        <!--
                        <a href="?excluir=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Selecione para Visualizar o Acompanhamento" name="btn-selecionarAcompanhamento">
                            <i class="material-icons">edit</i>
                        </a>
                        -->
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
            <?php } ?> 
        </table>
        <br/>
        <div class="col-md-12 center text-center">
            <span class="left" id="total_reg"></span>
            <ul class="pagination pager" id="paginaAtividade"></ul>
        </div>
    </form>