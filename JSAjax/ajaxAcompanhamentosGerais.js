renderizarAcompanhamentosGerais();

function renderizarAcompanhamentosGerais() {
    $("#acompanhamentosGerais").load("PHPBody/Principal/AcompanhamentosGerais_Principal.php");
    return false;
}

function excluirAcompanhamento(id) {
    $.ajax({
        url: 'PHPAjax/Request_Acompanhamentos.php',
        type: 'POST',
        data: "acao=Excluir" + "&id=" + id
    }).done(function (data) {
        if (data === "ok") {
            renderizarAcompanhamentosGerais();
            M.toast({html: "Acompanhamento excluído", classes: 'rounded', displayLength: 3000});
        } else {
            renderizarAcompanhamentosGerais();
            M.toast({html: "Este Acompanhamento está sendo utilizado. Impossível excluir!", classes: 'rounded', displayLength: 5000});
        }
    });
    return false;
}

function plotarAcompanhamento(id) {
    $.ajax({
        url: 'PHPAjax/Request_Acompanhamentos.php',
        type: 'POST',
        dataType: "JSON",
        data: "acao=plotarValores&" + "id=" + id
    }).done(function (data) {
        $("#acompanhamentoID").val(data.id);
        $("#tituloText").val(data.titulo);
        $("#servidorText").val(data.servidor);
        $("#dataInicioText").val(data.dataInicio);
        $("#dataFimText").val(data.dataFim);
        $("#alunosIniciaisText").val(data.alunosIniciais);
        $("#periodoText").val(data.periodo);
        $("#cursoText").val(data.curso);
        
        $("#cadastrarAcompanhamentoButton").val("Salvar Acompanhamento");
        M.toast({html: "Editando Acompanhamento ...", classes: 'rounded', displayLength: 3000});
    });
    return false;
}