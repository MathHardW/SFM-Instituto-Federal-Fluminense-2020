var acompanhamentoElement = document.getElementById('acompanhamentoFicha').value;
renderizarTodos();

function renderizarTodos() {
        $("#fichas").load("PHPBody/Acompanhamento/Fichas_Acompanhamento.php", {acompanhamento: acompanhamentoElement, pesquisa: null});
    $("#atividades").load("PHPBody/Acompanhamento/Atividades_Acompanhamento.php", {acompanhamento: acompanhamentoElement, pesquisa: null});

    return false;
}

function deletarFicha(id) {
    $.ajax({
        url: 'PHPAjax/Request_Ficha.php',
        type: 'POST',
        data: "acao=deletarFicha&" + "id=" + id
    }).done(function () {
        M.toast({html: 'Ficha Excluída', classes: 'rounded', displayLength: 3000});
        renderizarTodos();
    });

    return false;
}

function plotarFicha(codigo) {
    //INCLUINDO FICHA EXISTENTE
    if (codigo === -1) {
        codigo = document.getElementById('SelectFicha').value;
        textMsg = "Incluindo Ficha ...";
        var btnText = "Incluir Ficha";
        desabilitaSelect = false;
    } else {
        //EDITANDO UMA FICHA
        var textMsg = "Editando Ficha ...";
        var btnText = "Salvar Ficha";
        var desabilitaSelect = true;
    }

    $.ajax({
        url: 'PHPAjax/Request_Ficha.php',
        type: 'POST',
        dataType: "JSON",
        data: "acao=plotarValores&" + "codigo=" + codigo
    }).done(function (data) {
        $('#idFicha').val(data.id);
        $('#SelectTrabalha').val(data.trabalha);
        $('#SelectDependentes').val(data.dependentes);
        $('#SelectAtendimento').val(data.atendimento);
        $('#SelectMoradia').val(data.moradia);
        $('#SelectSexo').val(data.sexo);
        $('#TextData').val(data.date);
        $('#SelectCidade').val(data.cidade);

        $("#SelectFicha").prop("disabled", desabilitaSelect);
        $("#incluirFicha").val(btnText);

        M.toast({html: textMsg, classes: 'rounded', displayLength: 3000});
    });

    return false;
}

function limparFichas() {
    $('#idFicha').val("");
    $('#SelectTrabalha').val("");
    $('#SelectDependentes').val("");
    $('#SelectAtendimento').val("");
    $('#SelectMoradia').val("");
    $('#SelectSexo').val("");
    $('#TextData').val("");
    $('#SelectCidade').val("");

    $("#SelectFicha").val("");
    $("#SelectFicha").prop("disabled", false);
    $("#incluirFicha").val("Incluir Ficha");
}
