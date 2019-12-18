<!-- CADASTRO E APRESENTAÇÃO DAS MODALIDADES ---------------------------------->
<p>
    <input type="text" name="nomeModalidadeText" value="<?= $modalidadeNome ?>" placeholder="Modalidade"/>
    <select name="nivelModalidadeText">
        <option value="" disabled selected>Selecione um Nivel</option> 
        <?php foreach ($nivelDAO->querySelect() as $result) { ?>
            <option value="<?= $result['id'] ?>"><?= $result['nome'] ?></option> 
        <?php } ?> 
    </select>

    <input class="btn right" type="submit" id="btnCad" name="cadastrarModalidadeButton" value="Cadastrar Modalidade"/>
    </br></br>
</p>

<table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
    <thead>
        <tr class="grey lighten-1 center-align">
            <th>Nome</th>
            <th>Nivel</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($modalidadeDAO->querySelect() as $result) { ?>

            <tr>
                <td><?= $result[1] ?></td>
                <td><?= $result[2] ?></td>


                <td>
                    <a href="?excluirIdModalidade=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Deletar Modalidade" name="btn-deletarAcompanhamento">
                        <i class="material-icons">delete</i>
                    </a>

                    <a href="?pesquisarIdModalidade=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Editar Modalidade" name="btn-selecionarAcompanhamento">
                        <i class="material-icons">edit</i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</br></br>