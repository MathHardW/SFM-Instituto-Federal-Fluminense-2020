<!---------------------------------------------------------------------------------------------------------------------------->
<div class="row">
    <div class="col s12 l6">
        <input type="text" name="tituloText" id="tituloText" placeholder="Titulo" class="center-align" required/>
    </div>
    <div class="col s12 l6">
        <input type="text" name="servidorText" placeholder="Servidor" class="center-align" required>
    </div>
</div>
<!---------------------------------------------------------------------------------------------------------------------------->
<div class="row">
    <div class="col s6 l6">
        <input type="text" name="dataInicioText" placeholder="Data Inicio" class="datepicker center-align" required>
    </div>
    <div class="col s6 l6">
        <input type="text" name="dataFimText" placeholder="Data Fim" class="datepicker center-align" required>
    </div>
</div>
<!---------------------------------------------------------------------------------------------------------------------------->
<div class="row">
    <div class="col s12 l6">
        <input type="number" min='0' name="alunosIniciaisText" placeholder="Alunos Iniciais" class="center-align" required>
    </div>
    <div class="hide-on-med-and-up"><br/><br/><br/><br/></div>
    <div class="col s6 l3">
        <select class="browser-default white z-depth-3" name="periodoText" id="periodoText" class="center-align" required>
            <option value="" disabled selected>Escolha um Semestre.</option>
            <option value="1º Semestre">1º Semestre</option>
            <option value="1º Semestre">2º Semestre</option> 
        </select>
    </div>
    <div class="col s6 l3">
        <select class="browser-default white z-depth-3" name="cursoText" class="center-align" required>
            <option value="" disabled selected>Escolha um curso.</option>
            <?php foreach ($cursoDAO->querySelect() as $result) { ?>
                <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
            <?php } ?>
        </select>
    </div>
    <input type="number" name="alunosFinaisText" placeholder="Alunos Finais" value="0" class="center-align" hidden>

</div>
<div class="row">
    <input type="submit" class="btn green darken-4 center" id="btnCad" name="cadastrarAcompanhamentoButton" value="Cadastrar Acompanhamento" style="color: white;
           font-size: 15px;
           text-shadow: 1px 1px black;"/>
</div>