<?php
//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/CursoDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/AcompanhamentoDAO.php';

//ESTANCIANDO A CLASSE
$acompanhamentoDAO = new AcompanhamentoDAO();
$acompanhamentos = $acompanhamentoDAO->querySelect();

$cursoDAO = new CursoDAO();
$cursos = $cursoDAO->querySelect();
?>

<div class="col s12 l12 grey" style="border-radius: 20px 20px 0px 0px;border-style: solid; border-width: 0px 0px 1px 1px; height: 20px;"></div>

<div class="col s12 l12 container center"> <br/>
    <form action="" id="tipoAtividadeForm" method="post">
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
                <input type="text" name="dataInicioText" placeholder="Data Inicio" class="datepicker center-align" required readonly>
            </div>
            <div class="col s6 l6">
                <input type="text" name="dataFimText" placeholder="Data Fim" class="datepicker center-align" required readonly>
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
                    <?php foreach ($cursos as $result) { ?>
                        <option value="<?= $result[0] ?>"><?= $result[1] ?></option> 
                    <?php } ?>
                </select>
            </div>
            <input type="number" name="alunosFinaisText" placeholder="Alunos Finais" value="0" class="center-align" hidden>
        </div>

        <div class="row">
            <div class="col s12 l12">
                <input type="submit" class="btn right grey darken-3" id="cadastrarAcompanhamentoButton" value="Cadastrar Acompanhamento"/>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col s12 m12 l12">
            <table cellpadding="1" cellspacing="1" class="responsive-table bordered highlight centered flow-text z-depth-3 grey darken-2" id="tabelaAcompanhamentosGerais" style="border-style: solid;border-width: 1px;border-color: black;">
                <thead>
                    <tr class="grey darken-2 white-text">
                        <th>Título</th>
                        <th>Servidor</th>
                        <th>Curso</th>
                        <th>Data Ínicio</th>
                        <th>Data Fim</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($acompanhamentos as $result) { ?>
                        <tr class="grey darken-1">
                            <td><?= $result[1] ?></td>
                            <td><?= $result[2] ?></td>
                            <td><?= $result[3] ?></td>
                            <td><?= $result[4] ?></td>
                            <td><?= $result[5] ?></td>
                            <td><?php if ($result['status'] == 1) {
                        echo "<i class='material-icons green-text'>layers</i>";
                    } else {
                        echo "<i class='material-icons red-text'>layers_clear</i>";
                    } ?></td>
                            <td>
                                <button class="btn tooltipped grey darken-3" onclick="FinalizarAcompanhamento('<?= $result[0] ?>')"  data-tooltip="Finalizar Acompanhamento" data-position="top" <?php if ($result['status'] == 1) {
                        echo "disabled";
                    } ?>> <i class="material-icons">done_all</i> </button>

                                <a href="?seleciona=<?= $result[0] ?>" class="btn tooltipped grey darken-3" data-position="bottom" data-tooltip="Visualizar Acompanhamento" name="btn-editarAcompanhamento" <?php if ($result['status'] == 1) {
                        echo "disabled";
                    } ?>>
                                    <i class="material-icons">send</i>
                                </a>
                            </td>
                        </tr>
<?php } ?> 
                </tbody>
            </table>
            <div class="col-md-12 center text-center white-text">
                <span class="left" id="total_reg"></span>
                <ul class="pagination pager" id="paginaAcompanhamentoGerais"></ul>
            </div>
        </div>
    </div>
</div>

<div class="col s12 l12 grey" style="border-radius: 0px 0px 20px 20px;border-style: solid; border-width: 1px 1px 0px 0px; height: 20px;"></div>


<script>
    $('.tooltipped').tooltip();
    $('.modal').modal();
    $('.datepicker').datepicker({
        format: 'dd-mm-yyyy'
    });

    $('#tabelaAcompanhamentosGerais').pageMe({
        pagerSelector: '#paginaAcompanhamentoGerais',
        activeColor: 'green darken-4',
        prevText: 'Retroceder',
        nextText: 'Avançar',
        showPrevNext: true,
        hidePageNumbers: false,
        perPage: 3
    });

    function FinalizarAcompanhamento(id) {
        $.ajax({
            url: 'PHPAjax/Request_Acompanhamentos.php',
            type: 'POST',
            data: "acao=finalizarAcompanhamento&" + "id=" + id
        }).done(function (data) {
            alert("Alunos Finais :" + data);

            if (data === "ok") {
                renderizarAcompanhamentosGerais();
                M.toast({html: "Acompanhamento Finalizado!", classes: 'rounded', displayLength: 3000});
            } else {
                renderizarAcompanhamentosGerais();
                M.toast({html: "Impossível Finalizar Acompanhamento!", classes: 'rounded', displayLength: 5000});
            }
        });
        return false;
    }

</script>
