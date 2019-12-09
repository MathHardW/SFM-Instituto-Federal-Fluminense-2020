<div class="row"></br>
    <div class="col s12 l12">
        <select class="browser-default js-example-basic-single" name="codigoFichaText" id="SelectFicha">
            <option value="" disabled selected>Adicionar Ficha Existente</option>
            <?php foreach ($fichaDAO->querySelectCode() as $result) { ?>
            <option value="<?= $result[0] ?>"><?= $result[0] ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="row">
    <div class="col s12 l6">
        <select class="browser-default z-depth-2" name="trabalhaText">
            <option value="" disabled>Situação Trabalhista</option>
            <option value="0">Não-Trabalha</option> 
            <option value="1">Trabalha</option> 
        </select>
    </div>
    <div class="col s12 l6">
        <select class="browser-default z-depth-2" name="dependentesText">
            <option value="" disabled selected>Situação Dependentes</option>
            <option value="0">Não-Possui Dependentes</option> 
            <option value="1">Possui Dependentes</option> 
        </select>
    </div>
</div>
</br>
<div class="row">
    <div class="col s12 l12">
        <select class="browser-default z-depth-2" name="atendimentoEspecialText">
            <option value="" disabled selected>Atendimento Especial</option>
            <option value="0">Não-Precisa</option> 
            <option value="1">Precisa</option> 
        </select>
    </div>
</div>
</br>
<div class="row">
    <div class="col s12 l6">
        <select class="browser-default z-depth-2" name="moradiaText">
            <option value="" disabled selected>Situação Moradia</option>
            <option value="0">Não-Mora Sozinho</option> 
            <option value="1">Mora Sozinho</option> 
        </select>
    </div>
    <div class="col s12 l6">
        <select class="browser-default z-depth-2" name="sexoText">
            <option value="" disabled selected>Sexo</option>
            <option value="M">Masculino</option> 
            <option value="F">Feminino</option> 
        </select>
    </div>
</div>
</br>
<div class="row">
    <div class="col s12 l6">
        <select class="browser-default z-depth-2" name="cidadeText">
            <option value="" disabled selected>Cidade</option>
            <option value="5">Itaperuna</option> 
            <option value="4">Aperibé</option> 
        </select>
    </div>
    <div class="col s12 l6">
        <textarea id="textarea2" class="materialize-textarea datepicker" data-length="120" placeholder="Data Início do Aluno" name="dataText"></textarea>
    </div>
</div>

</br>
<input type="submit" class="btn green darken-4 white-text" id="btnCad" name="cadastrarFichaButton" value="Incluir Ficha"/>
