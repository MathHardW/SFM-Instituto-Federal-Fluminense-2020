<!-- CADASTRO E APRESENTAÇÃO DOS NIVEIS --------------------------------------->
<h3>CADASTRAR NIVEL</h3>
<p>
    Nome Nivel: <input type="text" name="nomeNivelText" value="<?= $nivelNome ?>"/>
    <input type="submit" id="btnCad" name="cadastrarNivelButton" value="Cadastrar"/>
</p>

<?php foreach ($nivelDAO->querySelect() as $result) { ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>

        <tr>
            <td><?= $result['id'] ?></td>
            <td><?= $result['nome'] ?></td>

            <td><a href="?pesquisarIdNivel=<?= $result['id'] ?>">Editar</a></td>
            <td><a href="?excluirIdNivel=<?= $result['id'] ?>">Excluir</a></td>
        </tr>
    </table>
<?php } ?>  
</br></br>

<!-- CADASTRO E APRESENTAÇÃO DAS MODALIDADES ---------------------------------->
<h3>CADASTRAR MODALIDADE</h3>
<p>
    Nome Modalidade: <input type="text" name="nomeModalidadeText" value="<?= $modalidadeNome ?>"/>
    <select name="nivelModalidadeText">
        <?php foreach ($nivelDAO->querySelect() as $result) { ?>
            <option value="<?= $result['id'] ?>"><?= $result['nome'] ?></option> 
        <?php } ?> 
    </select>

    <input type="submit" id="btnCad" name="cadastrarModalidadeButton" value="Cadastrar"/>
</p>

<?php foreach ($modalidadeDAO->querySelect() as $result) { ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Nivel</th>
            <th>Ações</th>
        </tr>

        <tr>
            <td><?= $result[0] ?></td>
            <td><?= $result[1] ?></td>
            <td><?= $result[2] ?></td>

            <td><a href="?pesquisarIdModalidade=<?= $result['id'] ?>">Editar</a></td>
            <td><a href="?excluirIdModalidade=<?= $result['id'] ?>">Excluir</a></td>
        </tr>
    </table>
<?php } ?>  
</br></br>

<h3>CADASTRAR CURSO</h3>
<p>Nome Curso: <input type="text" name="nomeCursoText" value="<?= $cursoNome ?>"/>
    <select name="modalidadeCursoText">
        <?php foreach ($modalidadeDAO->querySelect() as $result) { ?>
            <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
        <?php } ?>
    </select>
    <input type="submit" id="btnCad" name="cadastrarCursoButton" value="Cadastrar"/>
</p>

<?php foreach ($cursoDAO->querySelect() as $result) { ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>

        <tr>
            <td><?= $result[0] ?></td>
            <td><?= $result[1] ?></td>
            <td><?= $result[2] ?></td>
            
            <td><a href="?pesquisarIdCurso=<?= $result['id'] ?>">Editar</a></td>
            <td><a href="?excluirIdCurso=<?= $result['id'] ?>">Excluir</a></td>
        </tr>
    </table>
<?php } ?>   

</br></br>



