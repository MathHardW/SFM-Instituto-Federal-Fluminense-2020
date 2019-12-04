<h3>CADASTRAR TIPO DE ATIVIDADE</h3>

<p>Nome: <input type="text" name="nomeTipoAtividadeText" value="<?= $nomeTipoAtividade ?>"/></p>
<p>Descrição: <input type="text" name="descricaoTipoAtividadeText" value="<?= $descricaoTipoAtividade ?>"/></p>
<p><input type="submit" id="btnCad" name="cadastrarTipoAtividadeButton" value="Cadastrar"/></p>

<?php foreach ($tipoAtividadeDAO->querySelect() as $result) { ?>
    <table>
        <tr>
            <th>Identificador</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>

        <tr>
            <td><?= $result['id'] ?></td>
            <td><?= $result['nome'] ?></td>
            <td><?= $result['descricao'] ?></td>

            <td><a href="?pesquisarIdTipoAtividade=<?= $result['id'] ?>">Editar</a></td>
            <td><a href="?excluirIdTipoAtividade=<?= $result['id'] ?>">Excluir</a></td>
        </tr>
    </table>
<?php } ?>     
</br></br>