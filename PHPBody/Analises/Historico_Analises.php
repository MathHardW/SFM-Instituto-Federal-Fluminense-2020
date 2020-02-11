<?php
//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/FichaDAO.php';

//ESTANCIANDO A CLASSE
$fichaDAO = new FichaDAO();
$pesquisa = filter_input(INPUT_POST, 'texto');
$fichas = $fichaDAO->querySelectAll($pesquisa);
?>

<div class="col s12 l12 container"><br/>

    <!--PESQUISA DE FICHAS-->
    <select class="browser-default js-example-basic-single" id="pesquisaFicha">
        <option value="" disabled selected="">Qual ficha você está procurando?</option>
        <?php foreach ($fichaDAO->querySelectAll(null) as $result) { ?>
            <option value="<?= $result[0] ?>"><?= $result[0] ?> | <?= $result[1] ?></option>
        <?php } ?>
    </select>
    <br/><br/>  

    <table cellpadding="1" cellspacing="1" class="responsive-table bordered centered highlight z-depth-3 grey darken-1" id="tabelaFichas" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>
            <tr class="grey center-align" onclick="renderizarHistorico()" title="Clique para atualizar a tabela.">
                <th>Código</th>
                <th>Trabalha</th>
                <th>Dependentes</th>
                <th>Atendimento<br/>Especial</th>
                <th>Mora Sozinho</th>
                <th>Sexo</th>
                <th>Cidade</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fichas as $result) { ?>

                <tr>
                    <td><h6><b><?= $result[0] ?></b></h6></td>
                    <td><?php if ($result[3] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                    <td><?php if ($result[4] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                    <td><?php if ($result[5] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                    <td><?php if ($result[6] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                    <td><?php if ($result[7] == "M") { ?> <img src="IMG/boy.png" height="40px" width="40px"> <?php } else { ?> <img src="IMG/woman.png" height="40px" width="40px"> <?php } ?></td>
                    <td><?= $result[8] ?></td>
                    <td><?= $result[2] ?></td>
                </tr>
            <?php } ?>
        </tbody>

    </table>

    <div class="col-md-12 center text-center">
        <span class="left" id="total_reg"></span>
        <ul class="pagination pager" id="paginaFicha"></ul>
    </div>
</div>


<script>
    $('.tooltipped').tooltip();
    $('.modal').modal();
    $('.js-example-basic-single').select2();

    $('#tabelaFichas').pageMe({
        pagerSelector: '#paginaFicha',
        activeColor: 'green darken-4',
        prevText: 'Retroceder',
        nextText: 'Avançar',
        showPrevNext: true,
        hidePageNumbers: false,
        perPage: 5
    });

    //Pesquisar as fichas
    $("#pesquisaFicha").change(function () {
        M.toast({html: "Pesquisando ...", classes: 'rounded', displayLength: 3000});
        var texto = $(this).val();

        $("#historico").load("PHPBody/Analises/Historico_Analises.php", {texto: texto});

        return false;
    });
</script>
