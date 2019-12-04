</br>
<div class="col s12 l12">
    <select class="browser-default js-example-basic-single" name="tipoAtividadeText">
        <option value="" disabled selected>Tipo de Atividade</option>
        <?php foreach ($tipoAtividadeDAO->querySelect() as $result) { ?>
            <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
        <?php } ?> 
    </select>
    </br></br>
</div>
<div class="col s12 l6">
    <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Título" name="tituloText"></textarea>
</div>
<div class="col s12 l6">
    <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Servidor" name="servidorText"></textarea>
</div>
<div class="col s12 l6">
    <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Descrição" name="descricaoText"></textarea>
</div>
<div class="col s12 l6">
    <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Público Alvo" name="publicoAlvoText"></textarea>
</div>
<div class="col s12 l6">
    <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Resultados Esperados" name="resultadosEsperadosText"></textarea>
</div>
<div class="col s12 l6">
    <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Resultados Obtidos" name="resultadosObtidosText"></textarea>
</div>
<div class="col s12 l6">
    <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Data Início" name="dataInicioText"></textarea>
</div>
<div class="col s12 l6">
    <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Data Fim" name="dataFimText"></textarea>
</div>

<div class="row"></br></div>
<div class="row"></br>
    <input type="submit" class="btn blue-grey darken-4 white-text" id="btnCad" name="cadastrarAtividadeButton" value="Incluir Atividade"/>
</div>
