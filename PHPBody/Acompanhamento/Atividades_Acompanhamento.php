<form action="" method="post">
    <div class="col s12 l12">
        </br>
        <div class="row">
            <div class="col s12 l12">
                <select class="browser-default js-example-basic-single" name="tipoAtividadeText">
                    <option value="" disabled selected>Tipo de Atividade</option>
                    <?php foreach ($tipoAtividadeDAO->querySelect() as $result) { ?>
                        <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
                    <?php } ?> 
                </select>
                </br>
            </div>
        </div>

        <div class="row">
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Título" name="tituloText"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Servidor" name="servidorText"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Descrição" name="descricaoText"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Público Alvo" name="publicoAlvoText"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Resultados Esperados" name="resultadosEsperadosText"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Resultados Obtidos" name="resultadosObtidosText"></textarea>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea datepicker" data-length="120" placeholder="Data Início da Atividade" name="dataInicioText"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea datepicker" data-length="120" placeholder="Data Fim da Atividade" name="dataFimText"></textarea>
            </div>
        </div>

        <div class="row"></br>
            <input type="submit" class="btn green darken-4 white-text" value="Incluir Atividade" id="incluirAtividade"/>
            <!--<input type="submit" class="btn green darken-4 white-text" value="Incluir Atividade" id="btnCad" name="cadastrarAtividadeButton" />-->
        </div>
    </div>
</form>