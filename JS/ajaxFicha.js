$(function () {
    $('#SelectFicha').on('change', function () {
        var codigo = $(this).val();

        $.ajax({
            url: 'PHPAjax/Request_Ficha.php',
            type: 'POST',
            dataType: "JSON",
            data: {codigoFicha: codigo}
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
});