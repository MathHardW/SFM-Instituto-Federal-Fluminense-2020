<div class="col s12 l12"><br/><br/>
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
                    <a href="?excluir=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Deletar Atividade" name="btn-deletarAcompanhamento">
                        <i class="material-icons">delete</i>
                    </a>

                    <a href="?edita=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Editar Atividade" name="btn-selecionarAcompanhamento">
                        <i class="material-icons">edit</i>
                    </a>
                </td>
            </tr>

            <!-- Modal Structure -->
            <div id="modalD<?= $result[0] ?>" class="modal">
                <div class="modal-content">
                    <h4>Descrição da Atividade</h4>
                    <p><?= $result[3] ?></p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
            </div>

            <!-- Modal Structure -->
            <div id="modalRE<?= $result[0] ?>" class="modal">
                <div class="modal-content">
                    <h4>Resultados Esperados</h4>
                    <p><?= $result[5] ?></p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
            </div>

            <!-- Modal Structure -->
            <div id="modalRO<?= $result[0] ?>" class="modal">
                <div class="modal-content">
                    <h4>Resultados Obtidos</h4>
                    <p><?= $result[6] ?></p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
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