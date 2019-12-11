$(function () {
    $('#SelectFicha').on('change', function () {
        var codigo = $(this).val();

        $.ajax({
            url: 'PHPAjax/Request_Ficha.php',
            type: 'POST',
            dataType: "JSON",
            data: "acao=plotarValores&" + "codigoFicha=" + codigo
        }).done(function (data) {
            console.log(data);
            $('#SelectTrabalha').val(data.trabalha);
            $('#SelectDependentes').val(data.dependentes);
            $('#SelectAtendimento').val(data.atendimento);
            $('#SelectMoradia').val(data.moradia);
            $('#SelectSexo').val(data.sexo);
            $('#TextData').val(data.date);
            $('#SelectCidade').val(data.cidade);
        });
    });

    $('form#form-ficha').submit(function () {
        var formFicha = $(this);

        $.ajax({
            url: 'PHPAjax/Request_Ficha.php',
            type: 'POST',
            dataType: "JSON",
            data: "acao=incluirFicha&" + formFicha.serialize()
        }).done(function (dados) {

            var newRow = $("<tr>");
            var cols = "";
            cols += '<td>' + dados.codigo + '</td>';
            cols += '<td>' + dados.trabalha + '</td>';
            cols += '<td>' + dados.dependentes + '</td>';
            cols += '<td>' + dados.atendimento + '</td>';
            cols += '<td>' + dados.moradia + '</td>';
            cols += '<td>' + dados.sexo + '</td>';
            cols += '<td>' + dados.date + '</td>';
            cols += '<td>' + dados.cidade + '</td>';

            cols += '<td>';
            cols += '<a href="?editar='+dados.id;
            cols += '" class="btn tooltipped" data-position="top" data-tooltip="Selecione para Editar Acompanhamento" name="btn-editarAcompanhamento"><i class="material-icons">edit</i></a>';
            cols += '<a href="?excluir='+dados.id;
            cols += '" class="btn tooltipped" data-position="bottom" data-tooltip="Selecione para Excluir o Acompanhamento" name="btn-excluirAcompanhamento"><i class="material-icons">delete</i></a>';
            cols += '</td>';

            newRow.append(cols);
            
            alert("Ficha Inclusa com sucesso!");
            $("#tabelaFicha").append(newRow);
        });

        return false;
    });
});