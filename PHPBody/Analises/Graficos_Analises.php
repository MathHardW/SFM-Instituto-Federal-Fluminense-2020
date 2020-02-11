<?php
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/FichaDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/AcompanhamentoDAO.php';

$acompanhamentoDAO = new AcompanhamentoDAO();
$fichaDAO = new FichaDAO();

$trabalham = 0;
$dependentes = 0;
$atendimentoEspecial = 0;
$moraSozinho = 0;
$mulheres = 0;
$homens = 0;
$qtdAlunos = 0;

if (filter_input(INPUT_POST, 'acompanhamento') != null) {
    $fichaDAO->getFicha()->setAcompanhamento(filter_input(INPUT_POST, 'acompanhamento'));

    foreach ($fichaDAO->querySelect(null) as $result) {
        if ($result[1] == 1) {
            $trabalham += 1;
        }
        if ($result[2] == 1) {
            $dependentes += 1;
        }
        if ($result[3] == 1) {
            $atendimentoEspecial += 1;
        }
        if ($result[4] == 1) {
            $moraSozinho += 1;
        }
        if ($result[5] == 'M') {
            $homens += 1;
        } else {
            $mulheres += 1;
        }

        $qtdAlunos += 1;
    }
} else {
    foreach ($fichaDAO->querySelectAll(null) as $result) {
        if ($result[3] == 1) {
            $trabalham += 1;
        }
        if ($result[4] == 1) {
            $dependentes += 1;
        }
        if ($result[5] == 1) {
            $atendimentoEspecial += 1;
        }
        if ($result[6] == 1) {
            $moraSozinho += 1;
        }
        if ($result[7] == 'M') {
            $homens += 1;
        } else {
            $mulheres += 1;
        }

        $qtdAlunos += 1;
    }
}
?>

<div class="row">
    <!--PESQUISA DE FICHAS-->
    <select class="browser-default js-example-basic-single" id="pesquisaAcomp">
        <option value="" disabled selected="">Qual acompanhamento você está procurando?</option>
        <?php foreach ($acompanhamentoDAO->querySelect() as $result) { ?>
            <option value="<?= $result[0] ?>"><?= $result[1] ?> | <?= $result[2] ?> | <?= $result[3] ?> | <?= $result[4] ?> | <?= $result[5] ?> | <?= $result[6] ?></option>
        <?php } ?>
    </select>

    <div class="col s12 white">
        <canvas id="myChart" width="400" height="150"></canvas>
    </div>
    
    <button class="center btn grey darken-4" style="width: 100%;" onclick="renderizarGraficos();">Situação Geral do Sistema</button>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
<script>
    $('.js-example-basic-single').select2();

    //Pesquisar as fichas
    $("#pesquisaAcomp").change(function () {
        M.toast({html: "Pesquisando ...", classes: 'rounded', displayLength: 3000});
        var id = $(this).val();

        $("#graficos").load("PHPBody/Analises/Graficos_Analises.php", {acompanhamento: id});

        return false;
    });

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Alunos', 'Mulheres', 'Homens', 'Possuem Emprego', 'Possuem Dependentes', 'Atendimento Especial', 'Moram Sozinho'],
            datasets: [{
                    label: '# Quantidade',
                    data: [<?= $qtdAlunos ?>,<?= $mulheres ?>,<?= $homens ?>,<?= $trabalham ?>,<?= $dependentes ?>,<?= $atendimentoEspecial ?>,<?= $moraSozinho ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });
</script>