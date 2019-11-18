
Titulo: <input type="text" name="tituloText"><br><br>
Servidor: <input type="text" name="servidorText"><br><br>
Alunos Iniciais: <input type="number" name="alunosIniciaisText"><br><br>
Alunos Finais: <input type="number" name="alunosFinaisText"><br><br>
Periodo de Ingresso: <input type="text" name="periodoText"><br><br>
Data Inicio: <input type="date" name="dataInicioText"><br><br>
Data Fim: <input type="date" name="dataFimText"><br><br>

Curso: <select name="cursoText">
        <?php foreach ($cursoDAO->querySelect() as $result) { ?>
            <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
        <?php } ?> 
    </select>

<input type="submit" id="btnCad" name="cadastrarAcompanhamentoButton" value="Cadastrar Acompanhamento"/><br><br>