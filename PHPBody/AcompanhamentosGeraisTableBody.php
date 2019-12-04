<div class="row">
    <div class="col s12 m12 l12">
        <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight " id="tabelaAcompanhamento">
            <tr>
                <td>Título</td>
                <td>Servidor</td>
                <td>Curso</td>
                <td>Data Ínicio</td>
                <td>Data Fim</td>
                <td>Ação</td>
            </tr>
            <?php foreach ($acompanhamentoDAO->querySelect() as $result) { ?>
                <tr>
                    <td><?= $result[1] ?></td>
                    <td><?= $result[2] ?></td>
                    <td><?= $result[3] ?></td>
                    <td><?= $result[4] ?></td>
                    <td><?= $result[5] ?></td>
                    <td>
                        <a href="?seleciona=<?= $result[0] ?>">SELECIONAR</a>
                        <a href="?edita=<?= $result[0] ?>">EDITAR</a>
                        <a href="?excluir=<?= $result[0] ?>">EXCLUIR</a>
                    </td>
                </tr>
            <?php } ?> 
        </table>
        <div class="col-md-12 center text-center">
            <span class="left" id="total_reg"></span>
            <ul class="pagination pager" id="paginaAcompanhamento"></ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12 m12 l12">
      <!--<input type="text" id="search" placeholder="Type to search..." />-->
        <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight " id="tabelaAcompanhamento">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Curso</th>
                    <th>Modalidade</th>
                    <th>Nivel</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>$0.87</td>
                    <td>
                        <a class="btn tooltipped" data-position="bottom" 
                           data-tooltip="Selecione para Editar Acompanhamento" name="btn-editarAcompanhamento">
                            <i class="material-icons">edit</i>
                        </a>

                        <a class="btn tooltipped" data-position="bottom" 
                           data-tooltip="Selecione para Apagar Acompanhamento" name="btn-deletarAcompanhamento">
                            <i class="material-icons">delete</i>
                        </a>

                        <a class="btn tooltipped" data-position="bottom" 
                           data-tooltip="Selecione para Visualizar o Acompanhamento" name="btn-selecionarAcompanhamento">
                            <i class="material-icons">send</i>
                        </a>
                    </td>
                </tr>                            
            </tbody>
        </table>
        <div class="col-md-12 center text-center">
            <span class="left" id="total_reg"></span>
            <ul class="pagination pager" id="paginaAcompanhamento"></ul>
        </div>
    </div>
</div>