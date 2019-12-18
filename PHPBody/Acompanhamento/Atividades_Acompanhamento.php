<div class="col s12 l12">
    </br>
    <form id="form-atividade" action="" method="post">
        <input type="text" value="<?= $_GET['acompanhamento'] ?>" hidden name="acompanhamentoAtividade" id="acompanhamentoAtividade"> 
        <input type="text" value="" hidden name="idAtividade" id="idAtividade"> 

        <select class="browser-default z-depth-2" name="tipoAtividadeText" id="tipoAtividade">
            <option value="" disabled selected>Tipo de Atividade</option>
            <?php foreach ($tipoAtividadeDAO->querySelect() as $result) { ?>
                <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
            <?php } ?> 
        </select>
        </br>

        <div class="row">
            <div class="col s12 l6">
                <textarea id="tituloText" class="materialize-textarea" data-length="10" placeholder="Título" name="tituloText"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="servidorText" class="materialize-textarea" data-length="120" placeholder="Servidor" name="servidorText"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l6">
                <textarea id="descricaoText" class="materialize-textarea" data-length="120" placeholder="Descrição" name="descricaoText"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="publicoAlvoText" class="materialize-textarea" data-length="120" placeholder="Público Alvo" name="publicoAlvoText"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l6">
                <textarea id="resultadosEsperadosText" class="materialize-textarea" data-length="120" placeholder="Resultados Esperados" name="resultadosEsperadosText"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="resultadosObtidosText" class="materialize-textarea" data-length="120" placeholder="Resultados Obtidos" name="resultadosObtidosText"></textarea>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col s12 l6">
                <textarea id="dataInicioText" class="materialize-textarea datepicker" data-length="120" placeholder="Data Início da Atividade" name="dataInicioText"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="dataFimText" class="materialize-textarea datepicker" data-length="120" placeholder="Data Fim da Atividade" name="dataFimText"></textarea>
            </div>
        </div>

        <div class="row"></br>
            <input type="submit" class="btn green darken-4 white-text" value="Incluir Atividade" id="incluirAtividade"/>
            <!--<input type="submit" class="btn green darken-4 white-text" value="Incluir Atividade" id="btnCad" name="cadastrarAtividadeButton" />-->
        </div>
    </form>
</div>