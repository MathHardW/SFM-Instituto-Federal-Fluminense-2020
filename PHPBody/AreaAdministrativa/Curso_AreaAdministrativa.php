<p>
    <input type="text" name="nomeCursoText" value="<?= $cursoNome ?>" placeholder="Curso"/>
    <select name="modalidadeCursoText">
        <option value="" disabled selected>Selecione uma Modalidade</option> 
        <?php foreach ($modalidadeDAO->querySelect() as $result) { ?>
            <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
        <?php } ?>
    </select>
    <input class="btn right" type="submit" id="btnCad" name="cadastrarCursoButton" value="Cadastrar Curso"/>
</p>

<div class="col s12 l12"><br/>
    <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>
            <tr class="grey lighten-1 center-align">
                <th>Nome</th>
                <th>Modalidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursoDAO->querySelect() as $result) { ?>
                <tr>
                    <td><?= $result[1] ?></td>
                    <td><?= $result[2] ?></td>

                    <td>
                        <a href="?excluirIdCurso=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Deletar Curso" name="btn-deletarAcompanhamento">
                            <i class="material-icons">delete</i>
                        </a>

                        <a href="?pesquisarIdCurso=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Editar Curso" name="btn-selecionarAcompanhamento">
                            <i class="material-icons">edit</i>
                        </a>
                    </td>
                </tr>
            <?php } ?>   
        </tbody>
    </table>
</div>
</br></br>