renderizarAcompanhamentosGerais();

function renderizarAcompanhamentosGerais() {
    $("#acompanhamentosGerais").load("PHPBody/Principal/AcompanhamentosGerais_Principal.php");
    return false;
}

