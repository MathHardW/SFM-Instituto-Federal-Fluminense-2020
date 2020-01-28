var acompanhamentoElement = document.getElementById('acompanhamento').value;
renderizarAtividades();

function renderizarAtividades() {
        $("#fichas").load("PHPBody/Acompanhamento/Fichas_Acompanhamento.php", {acompanhamento: acompanhamentoElement, pesquisa: null});
    $("#atividades").load("PHPBody/Acompanhamento/Atividades_Acompanhamento.php", {acompanhamento: acompanhamentoElement, pesquisa: null});

    return false;
}

function deletarAtividade(id) {
    $.ajax({
        url: 'PHPAjax/Request_Atividade.php',
        type: 'POST',
        data: "acao=deletarAtividade&" + "id=" + id
    }).done(function () {
        renderizarTodasAtividades();
        M.toast({html: 'Atividade Excluída', classes: 'rounded', displayLength: 3000});
    });

    return false;
}

function plotarAtividade(id) {
    $.ajax({
        url: 'PHPAjax/Request_Atividade.php',
        type: 'POST',
        dataType: "JSON",
        data: "acao=plotarValores&" + "id=" + id
    }).done(function (data) {
        $('#AtividadeID').val(data.id);
        $('#SelectAtividade').val(data.TipoAtividade);
        $("#SelectAtividade").prop("disabled", true);
        
        $('#tituloText').val(data.titulo);
        $('#servidorText').val(data.servidor);
        $('#descricaoText').val(data.descricao);
        $('#publicoAlvoText').val(data.publicoAlvo);
        $('#resultadosEsperadosText').val(data.resultadosEsperados);
        $('#resultadosObtidosText').val(data.resultadosObtidos);
        $('#dataInicioText').val(data.dataInicio);
        $('#dataFimText').val(data.dataFim);
        
        $('#incluirAtividadeButton').val("Salvar Atividade");

        //$('#SelectDependentes').val(data.servidor);
        //$('#SelectAtendimento').val(data.descricao);
        //$('#SelectMoradia').val(data.publicoAlvo);
        //$('#SelectSexo').val(data.resultadosEsperados);
        //$('#TextData').val(data.resultadosObtidos);
        //$('#SelectCidade').val(data.dataInicio);
        //$('#SelectCidade').val(data.dataFim);
        //$('#SelectCidade').val(data.TipoAtividade);

        //M.toast({html: textMsg, classes: 'rounded', displayLength: 3000});
    });

    return false;
}

function limparAtividade() {
    $('#idAtividade').val("");
    $('#tituloText').val("");
    $('#servidorText').val("");
    $('#descricaoText').val("");
    $('#publicoAlvoText').val("");
    $('#resultadosEsperadosText').val("");
    $('#resultadosObtidosText').val("");
    $('#dataInicioText').val("");
    $('#dataFimText').val("");

    $('#tipoAtividade').val("");

    $("#incluirAtividade").val("Incluir Atividade");
}
