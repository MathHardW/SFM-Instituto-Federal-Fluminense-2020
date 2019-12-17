<div class="col s12 l12">
    <form id="form-ficha" action="" method="post">
        <input type="text" value="<?= $_GET['acompanhamento'] ?>" hidden name="acompanhamentoFicha" id="acompanhamentoFicha"> 
        <input type="text" value="" hidden name="idFicha" id="idFicha"> 

        <div class="row"></br>
            <div class="col s12 l12">
                <select class="browser-default js-example-basic-single" name="codigoFichaText" id="SelectFicha">
                    <option value="" disabled selected>Adicionar Ficha Existente</option>
                    <?php foreach ($fichaDAO->querySelectCodigoExistente() as $result) { ?>
                        <option value="<?= $result[0] ?>"><?= $result[0] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col s12 l6">
                <select class="browser-default z-depth-2" name="trabalhaText" id="SelectTrabalha">
                    <option value="" disabled selected>Situação Trabalhista</option>  
                    <option value="0" >Não-Trabalha</option>
                    <option value="1" >Trabalha</option> 
                </select>
            </div>
            <div class="col s12 l6">
                <select class="browser-default z-depth-2" name="dependentesText" id="SelectDependentes">
                    <option value="" disabled selected>Situação Dependentes</option>
                    <option value="0" >Não-Possui Dependentes</option> 
                    <option value="1" >Possui Dependentes</option> 
                </select>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col s12 l12">
                <select class="browser-default z-depth-2" name="atendimentoEspecialText" id="SelectAtendimento">
                    <option value="" disabled selected>Atendimento Especial</option>
                    <option value="0">Não-Precisa</option> 
                    <option value="1">Precisa</option> 
                </select>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col s12 l6">
                <select class="browser-default z-depth-2" name="moradiaText" id="SelectMoradia">
                    <option value="" disabled selected>Situação Moradia</option>
                    <option value="0">Não-Mora Sozinho</option> 
                    <option value="1">Mora Sozinho</option> 
                </select>
            </div>
            <div class="col s12 l6">
                <select class="browser-default z-depth-2" name="sexoText" id="SelectSexo">
                    <option value="" disabled selected>Sexo</option>
                    <option value="M">Masculino</option> 
                    <option value="F">Feminino</option> 
                </select>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col s12 l6">
                <select class="browser-default z-depth-2" name="cidadeText" id="SelectCidade">
                    <option value="" disabled selected>Cidade</option>
                    <?php foreach ($cidadeDAO->querySelect() as $result) { ?>
                        <option value="<?= $result['id'] ?>"><?= $result['nome'] ?></option> 
                    <?php } ?>     
                </select>
            </div>
            <div class="col s12 l6">
                <input type="text" class="materialize-textarea datepicker" placeholder="Data Início do Aluno" name="dataText" id="TextData">
            </div>
        </div>

        </br>
        <input type="submit" class="btn green darken-4 white-text" value="Incluir Ficha" id="incluirFicha"/>
    </form>
</div>
