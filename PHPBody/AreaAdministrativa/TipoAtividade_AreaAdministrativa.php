<input type="text" name="nomeTipoAtividadeText" value="<?= $nomeTipoAtividade ?>" placeholder="Tipo Atividade"/>
<input type="text" name="descricaoTipoAtividadeText" value="<?= $descricaoTipoAtividade ?>" placeholder="Descrição"/>
<p><input type="submit" id="btnCad" name="cadastrarTipoAtividadeButton" value="Cadastrar"/></p>

<table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
    <tr class="grey lighten-1 center-align">
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ação</th>
    </tr>
    <?php foreach ($tipoAtividadeDAO->querySelect() as $result) { ?>
        <tr>
            <td><?= $result['nome'] ?></td>
            <td><?= $result['descricao'] ?></td>

            <td>
                <a href="?excluirIdTipoAtividade=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Selecione para Apagar Acompanhamento" name="btn-deletarAcompanhamento">
                    <i class="material-icons">delete</i>
                </a>

                <a href="?pesquisarIdTipoAtividade=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Selecione para Visualizar o Acompanhamento" name="btn-selecionarAcompanhamento">
                    <i class="material-icons">edit</i>
                </a>
            </td>
        </tr>
    <?php } ?>     
</table>
</br></br>