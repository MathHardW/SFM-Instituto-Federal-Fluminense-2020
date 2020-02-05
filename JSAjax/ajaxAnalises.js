renderizarHistorico();

function renderizarHistorico() {
    $("#historico").load("PHPBody/Analises/Historico_Analises.php");
    return false;
}