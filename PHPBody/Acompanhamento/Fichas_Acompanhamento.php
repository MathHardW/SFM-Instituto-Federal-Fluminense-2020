<?php
//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/FichaDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/FichaDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/CidadeDAO.php';

//ESTANCIANDO A CLASSE
$fichaDAO = new FichaDAO();
$fichaDAO->getFicha()->setAcompanhamento(filter_input(INPUT_POST, 'acompanhamento'));

$cidadeDAO = new CidadeDAO();

$pesquisa = filter_input(INPUT_POST, 'texto');
$fichas = $fichaDAO->querySelect($pesquisa);
?>

<div class="col s12 l12">
    <form id="fichasForm" action="" method="post">
        <input type="text" value="<?= filter_input(INPUT_POST, 'acompanhamento') ?>" hidden name="acompanhamentoFicha" id="acompanhamentoFicha"> 
        <input type="text" value="" hidden name="idFicha" id="idFicha"> 

        <div class="row"></br>
            <div class="col s12 l12">
                <select class="browser-default js-example-basic-single" name="codigoFichaText" id="SelectFicha" onchange="plotarFicha(-1)">
                    <option value="" selected>Adicionar Ficha Existente</option>
                    <?php
                        foreach ($fichaDAO->querySelectCodigoExistente() as $result) {
                            if ($fichaDAO->queryVerificaCodigo($result[1]) == true) {
                                echo "<option value='$result[1]'>$result[1]</option>";
                            }
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col s12 l6">
                <select class="browser-default z-depth-2" name="trabalhaText" id="SelectTrabalha" required>
                    <option value="" disabled selected>Situação Trabalhista</option>  
                    <option value="0" >Não-Trabalha</option>
                    <option value="1" >Trabalha</option> 
                </select>
            </div>

            <div class="col s12 l6">
                <select class="browser-default z-depth-2" name="dependentesText" id="SelectDependentes" required>
                    <option value="" disabled selected>Situação Dependentes</option>
                    <option value="0" >Não-Possui Dependentes</option> 
                    <option value="1" >Possui Dependentes</option> 
                </select>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col s12 l12">
                <select class="browser-default z-depth-2" name="atendimentoEspecialText" id="SelectAtendimento" required>
                    <option value="" disabled selected>Atendimento Especial</option>
                    <option value="0">Não-Precisa</option> 
                    <option value="1">Precisa</option> 
                </select>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col s12 l6">
                <select class="browser-default z-depth-2" name="moradiaText" id="SelectMoradia" required>
                    <option value="" disabled selected>Situação Moradia</option>
                    <option value="0">Não-Mora Sozinho</option> 
                    <option value="1">Mora Sozinho</option> 
                </select>
            </div>

            <div class="col s12 l6">
                <select class="browser-default z-depth-2" name="sexoText" id="SelectSexo" required>
                    <option value="" disabled selected>Sexo</option>
                    <option value="M">Masculino</option> 
                    <option value="F">Feminino</option> 
                </select>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col s12 l6">
                <select class="browser-default z-depth-2" name="cidadeText" id="SelectCidade" required>
                    <option value="" disabled selected>Cidade</option>
                    <?php foreach ($cidadeDAO->querySelect() as $result) { ?>
                        <option value="<?= $result['id'] ?>"><?= $result['nome'] ?></option> 
<?php } ?>     
                </select>
            </div>

            <div class="col s12 l6">
                <input type="text" class="materialize-textarea datepicker" placeholder="Data Início do Aluno" name="dataText" id="TextData" required readonly>
            </div>
        </div>
        </br>
        <input type="submit" class="btn grey darken-3 white-text right" value="Incluir Ficha" id="incluirFicha"/><br/><br/><br/>
    </form>


    <!--PESQUISA DE FICHAS-->
    <select class="browser-default js-example-basic-single" id="pesquisaFicha">
        <option value="" disabled selected="">Qual ficha você está procurando?</option>
        <?php foreach ($fichaDAO->querySelect(null) as $result) { ?>
            <option value="<?= $result[1] ?>"><?= $result[1] ?> | <?= $result[12] ?></option>
<?php } ?>
    </select>
    <br/><br/>
    <table cellpadding="1" cellspacing="1" class="responsive-table bordered centered highlight z-depth-3 grey darken-1" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>
            <tr class="grey center-align" onclick="renderizarTodos()" title="Clique para atualizar a tabela.">
                <th><b>Código</b></th>
                <th><b>Trabalha</b></th>
                <th><b>Dependentes</b></th>
                <th><b>Especial</b></th>
                <th><b>Moradia</b></th>
                <th><b>Sexo</b></th>
                <th><b>Data</b></th>
                <th><b>Cidade</b></th>
                <th><b>Ações</b></th>
            </tr>
        </thead>
        <tbody>
<?php foreach ($fichas as $result) { ?>
                <tr>
                    <td><h6><b><?= $result[1] ?></b></h6></td>
                    <td><?php if ($result[3] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                    <td><?php if ($result[4] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                    <td><?php if ($result[5] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                    <td><?php if ($result[6] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                    <td><?php if ($result[7] == "M") { ?> <img src="IMG/boy.png" height="40px" width="40px"> <?php } else { ?> <img src="IMG/woman.png" height="40px" width="40px"> <?php } ?></td>
                    <td><?= $result[8] ?></td>
                    <td><?= $result[12] ?></td>

                    <td>
                        <button class="btn tooltipped grey darken-3 modal-trigger" href="#modalExcluir<?= $result[0] ?>" data-tooltip="Excluir Ficha" data-position="top"> <i class="material-icons">delete</i> </button>
                        <button class="btn tooltipped grey darken-3" onclick="plotarFicha('<?= $result[1] ?>')"  data-tooltip="Editar Ficha" data-position="bottom"> <i class="material-icons">edit</i> </button>
                    </td>
                </tr>

                <!-- Modal Structure -->
            <div id="modalExcluir<?= $result[0] ?>" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4>Deseja excluir a Ficha <u><?= $result['codigo'] ?></u>?
                        <b><a onclick="deletarFicha(<?= $result[0] ?>);" class="modal-close black-text">Sim</a></b> ou
                        <b><a href="#!" class="modal-close black-text">Não</a></b>
                    </h4>
                    <p></p>
                </div>
            </div>
<?php } ?>
        </tbody>
    </table>

    <br/>
    <div class="col-md-12 center text-center">
        <span class="left" id="total_reg"></span>
        <ul class="pagination pager" id="paginaFicha"></ul>
    </div>
</div>
<script>
    $('.tooltipped').tooltip();
    $('.modal').modal();
    $('.js-example-basic-single').select2();
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('#tabelaFicha').pageMe({
        pagerSelector: '#paginaFicha',
        activeColor: 'green darken-4',
        prevText: 'Retroceder',
        nextText: 'Avançar',
        showPrevNext: true,
        hidePageNumbers: false,
        perPage: 4
    });

    //Pesquisar as fichas
    $("#pesquisaFicha").change(function () {
        M.toast({html: "Pesquisando ...", classes: 'rounded', displayLength: 3000});
        var texto = $(this).val();

        $("#fichas").load("PHPBody/Acompanhamento/Fichas_Acompanhamento.php", {acompanhamento: acompanhamentoElement, texto: texto});

        return false;
    });

    //INCLUIR OU SALVAR FICHA
    $('form#fichasForm').submit(function () {
        var incluirFichaElement = document.getElementById('incluirFicha').value;
        var formFichaElement = $(this);

        switch (incluirFichaElement) {
            case "Salvar Ficha":
                $.ajax({
                    url: 'PHPAjax/Request_Ficha.php',
                    type: 'POST',
                    data: "acao=salvarFicha&" + formFichaElement.serialize()
                }).done(function (retorno) {
                    if (retorno === "ok") {
                        renderizarTodos();
                        M.toast({html: 'Ficha Editada', classes: 'rounded', displayLength: 3000});
                    }
                });
                break;
            case "Incluir Ficha":
                $.ajax({
                    url: 'PHPAjax/Request_Ficha.php',
                    type: 'POST',
                    data: "acao=incluirFicha&" + formFichaElement.serialize()
                }).done(function (retorno) {
                    if (retorno === "ok") {
                        renderizarTodos();
                        M.toast({html: 'Ficha Incluida', classes: 'rounded', displayLength: 3000});
                    } else {
                        alert(retorno);
                    }
                });
                break;
            default:
                M.toast({html: 'Operação Inválida', classes: 'rounded', displayLength: 3000});
                limparFichas();
                renderizarTodos();
                break;
        }

        return false;
    });
</script>
