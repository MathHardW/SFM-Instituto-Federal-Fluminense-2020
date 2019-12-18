<!-- CADASTRO E APRESENTAÇÃO DOS NIVEIS --------------------------------------->
<input type="text" name="nomeNivelText" value="<?= $nivelNome ?>" placeholder="Nível"/>
<p><input class="btn right" type="submit" id="btnCad" name="cadastrarNivelButton" value="Cadastrar Nível"/></p>

<div><p></br></br></p></div>

<table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
    <thead>
        <tr class="grey lighten-1 center-align">
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($nivelDAO->querySelect() as $result) { ?>

            <tr>
                <td><?= $result['nome'] ?></td>

                <td>
                    <a href="?pesquisarIdNivel=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Deletar Nível" name="btn-deletarAcompanhamento">
                        <i class="material-icons">delete</i>
                    </a>

                    <a href="?excluirIdNivel=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Editar Nível" name="btn-selecionarAcompanhamento">
                        <i class="material-icons">edit</i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>

</table>
</br></br>