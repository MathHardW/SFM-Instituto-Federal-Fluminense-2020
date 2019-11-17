<h3>CADASTRAR CIDADE</h3>

<p>Cidade: <input type="text" name="nomeText" value="<?= $cidadeNome ?>"/></p>
<p>Estado: <input type="text" name="estadoText" value="<?= $cidadeEstado ?>"/></p>
<p><input type="submit" id="btnCad" name="cadastrarCidadeButton" value="Cadastrar"/></p>

<?php foreach ($cidadeDAO->querySelect() as $result) { ?>
    <table>
        <tr>
            <th>Identificador</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Ação</th>
        </tr>

        <tr>
            <td><?= $result['id'] ?></td>
            <td><?= $result['nome'] ?></td>
            <td><?= $result['estado'] ?></td>

            <td><a href="?pesquisarIdCidade=<?= $result['id'] ?>">Editar</a></td>
            <td><a href="?excluirIdCidade=<?= $result['id'] ?>">Excluir</a></td>
        </tr>
    </table>
<?php } ?>     
</br></br>
