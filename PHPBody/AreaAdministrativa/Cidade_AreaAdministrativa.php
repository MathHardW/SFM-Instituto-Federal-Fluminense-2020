<input type="text" name="nomeText" value="<?= $cidadeNome ?>" placeholder="Cidade"/>
<input type="text" name="estadoText" value="<?= $cidadeEstado ?>" placeholder="Estado"/>
<p><input class="btn right" type="submit" id="btnCad" name="cadastrarCidadeButton" value="Cadastrar Cidade"/></p>

<div class="col s12 l12"><br/>
    <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>
            <tr class="grey lighten-1 center-align">
                <th>Nome</th>
                <th>Estado</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cidadeDAO->querySelect() as $result) { ?>

                <tr>
                    <td><?= $result['nome'] ?></td>
                    <td><?= $result['estado'] ?></td>

                    <td>
                        <a href="?edita=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Deletar Cidade" name="btn-deletarAcompanhamento">
                            <i class="material-icons">delete</i>
                        </a>

                        <a href="?excluir=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Editar Cidade" name="btn-selecionarAcompanhamento">
                            <i class="material-icons">edit</i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </br></br>
</div>