<!-- CADASTRO E APRESENTAÇÃO DOS NIVEIS --------------------------------------->
<input type="text" name="nomeNivelText" value="<?= $nivelNome ?>" placeholder="Nível"/>
<p><input class="btn right" type="submit" id="btnCad" name="cadastrarNivelButton" value="Cadastrar Nível"/></p>

<div><p></br></br></p></div>

<table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
    <tr class="grey lighten-1 center-align">
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($nivelDAO->querySelect() as $result) { ?>

        <tr>
            <td><?= $result['nome'] ?></td>

            <td>
                <a href="?pesquisarIdNivel=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Selecione para Apagar Acompanhamento" name="btn-deletarAcompanhamento">
                    <i class="material-icons">delete</i>
                </a>

                <a href="?excluirIdNivel=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Selecione para Visualizar o Acompanhamento" name="btn-selecionarAcompanhamento">
                    <i class="material-icons">edit</i>
                </a>
            </td>
        </tr>
    <?php } ?>  

</table>
</br></br>

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
    <tr class="grey lighten-1 center-align">
        <th>Nome</th>
        <th>Nivel</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($modalidadeDAO->querySelect() as $result) { ?>

        <tr>
            <td><?= $result[1] ?></td>
            <td><?= $result[2] ?></td>


            <td>
                <a href="?excluirIdModalidade=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Selecione para Apagar Acompanhamento" name="btn-deletarAcompanhamento">
                    <i class="material-icons">delete</i>
                </a>

                <a href="?pesquisarIdModalidade=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Selecione para Visualizar o Acompanhamento" name="btn-selecionarAcompanhamento">
                    <i class="material-icons">edit</i>
                </a>
            </td>
        </tr>
    <?php } ?>  
</table>
</br></br>

<p><input type="text" name="nomeCursoText" value="<?= $cursoNome ?>" placeholder="Curso"/>
    <select name="modalidadeCursoText">
        <option value="" disabled selected>Selecione uma Modalidade</option> 
        <?php foreach ($modalidadeDAO->querySelect() as $result) { ?>
            <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
        <?php } ?>
    </select>
    <input type="submit" id="btnCad" name="cadastrarCursoButton" value="Cadastrar"/>
</p>

<table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
    <tr class="grey lighten-1 center-align">
        <th>Nome</th>
        <th>Modalidade</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($cursoDAO->querySelect() as $result) { ?>
        <tr>
            <td><?= $result[1] ?></td>
            <td><?= $result[2] ?></td>

            <td>
                <a href="?excluirIdCurso=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Selecione para Apagar Acompanhamento" name="btn-deletarAcompanhamento">
                    <i class="material-icons">delete</i>
                </a>

                <a href="?pesquisarIdCurso=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Selecione para Visualizar o Acompanhamento" name="btn-selecionarAcompanhamento">
                    <i class="material-icons">edit</i>
                </a>
            </td>
        </tr>
    <?php } ?>   

</table>

</br></br>



