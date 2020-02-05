renderizarHistorico();
renderizarGraficos();
materialize();

function renderizarHistorico() {
    $("#historico").load("PHPBody/Analises/Historico_Analises.php");
    return false;
}

function renderizarGraficos() {
    $("#graficos").load("PHPBody/Analises/Graficos_Analises.php");
    return false;
}

//FRAMEWORK FUNCTIONS
function materialize() {
    $('.dropdown-button').dropdown({
        container: document.body
    });
    $('.tabs').tabs();
    $('.tap-target').tapTarget();
}