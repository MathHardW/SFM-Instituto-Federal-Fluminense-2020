<div class="row">
    <div class="col s12 m12 l12">
        <table cellpadding="1" cellspacing="1" class="responsive-table bordered highlight centered flow-text z-depth-3 grey darken-2" id="tabelaAcompanhamento" style="border-style: solid;border-width: 1px;border-color: black;">
            <thead>
                <tr class="grey darken-2 white-text">
                    <th>Título</th>
                    <th>Servidor</th>
                    <th>Curso</th>
                    <th>Data Ínicio</th>
                    <th>Data Fim</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($acompanhamentoDAO->querySelect() as $result) { ?>
                    <tr class="grey darken-1">
                        <td><?= $result[1] ?></td>
                        <td><?= $result[2] ?></td>
                        <td><?= $result[3] ?></td>
                        <td><?= $result[4] ?></td>
                        <td><?= $result[5] ?></td>
                        <td>
                            <a href="?edita=<?= $result[0] ?>" class="btn tooltipped grey darken-4" data-position="top" data-tooltip="Deletar Acompanhamento" name="btn-deletarAcompanhamento">
                                <i class="material-icons">delete</i>
                            </a>

                            <a href="?excluir=<?= $result[0] ?>" class="btn tooltipped grey darken-4" data-position="bottom" data-tooltip="Editar o Acompanhamento" name="btn-selecionarAcompanhamento">
                                <i class="material-icons">edit</i>
                            </a>
                            <br/>
                            <a href="?excluir=<?= $result[0] ?>" class="btn tooltipped grey darken-4" data-position="bottom" data-tooltip="Finalizar o Acompanhamento" name="btn-selecionarAcompanhamento">
                                <i class="material-icons">check_circle</i>
                            </a>

                            <a href="?seleciona=<?= $result[0] ?>" class="btn tooltipped grey darken-4" data-position="bottom" data-tooltip="Visualizar Acompanhamento" name="btn-editarAcompanhamento">
                                <i class="material-icons">send</i>
                            </a>
                        </td>
                    </tr>
                <?php } ?> 
            </tbody>
        </table>
        <div class="col-md-12 center text-center white-text">
            <span class="left" id="total_reg"></span>
            <ul class="pagination pager" id="paginaAcompanhamento"></ul>
        </div>
    </div>
</div>
