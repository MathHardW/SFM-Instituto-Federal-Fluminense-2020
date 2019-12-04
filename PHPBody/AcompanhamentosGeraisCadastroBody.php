<div class="row">
    <div class="col s12 l6">
        <input type="text" name="tituloText" placeholder="Titulo" ><br><br>
    </div>
    <div class="col s12 l6">
        <input type="text" name="servidorText" placeholder="Servidor"><br><br>
    </div>
</div>
<div class="row">
    <div class="col s12 l3">
        <input type="number" name="alunosIniciaisText" placeholder="Alunos Iniciais"><br><br>

    </div>
    <div class="col s12 l3">
        <input type="number" name="alunosFinaisText" placeholder="Alunos Finais"><br><br>
    </div>
    <div class="col s12 l3">
        <input type="text" name="periodoText" placeholder="Periodo de Ingresso"><br><br>
    </div>
    <div class="col s12 l3">
        <select class="browser-default" name="cursoText">
            <option value="" disabled selected>Escolha um curso.</option>
            <?php foreach ($cursoDAO->querySelect() as $result) { ?>
                <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
            <?php } ?>
        </select>
    </div>
</div>
<div class="row">
    <div class="col s12 l6">
        <input type="date" name="dataInicioText" placeholder="Data Inicio"><br><br>
    </div>
    <div class="col s12 l6">
        <input type="date" name="dataFimText" placeholder="Data Fim"><br><br>
    </div>
    
    <input type="submit" class="btn green darken-4" id="btnCad" name="cadastrarAcompanhamentoButton" value="Cadastrar Acompanhamento"/>
</div>




