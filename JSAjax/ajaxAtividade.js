$(function () {

    //PLOTAR OS VALORES DAS FICHAS A SEREM EDITADAS
    $(".editarAtividade").on("click", function () {
        var id = $(this).attr('id');

        $.ajax({
            url: 'PHPAjax/Request_Atividade.php',
            type: 'POST',
            dataType: "JSON",
            data: "acao=plotarValores&" + "idAtividade=" + id
        }).done(function (data) {
            $('#idAtividade').val(data.id);
            $('#tipoAtividade').val(data.TipoAtividade);
            $('#tituloText').val(data.titulo);
            $('#servidorText').val(data.servidor);
            $('#descricaoText').val(data.descricao);
            $('#publicoAlvoText').val(data.publicoAlvo);
            $('#resultadosEsperadosText').val(data.resultadosEsperados);
            $('#resultadosObtidosText').val(data.resultadosObtidos);
            $('#dataInicioText').val(data.dataInicio);
            $('#dataFimText').val(data.dataFim);

            $("#incluirAtividade").val("Salvar Atividade");

            M.toast({html: 'Editando Atividade ...', classes: 'rounded', displayLength: 3000});
        });

        return false;
    });

    //ADICIONAR OU EDITAR NOVA FICHA
    $('form#form-atividade').submit(function () {
        var formAtividade = $(this);
        var acompanhamento = $("#acompanhamentoAtividade").val();

        if ($("#incluirAtividade").val() === "Salvar Atividade") {
            $acao = "salvarFichaComMesmoID";
        }

        switch ($acao) {
            case "salvarFichaComMesmoID":
                $.ajax({
                    url: 'PHPAjax/Request_Atividade.php',
                    type: 'POST',
                    data: "acao=salvarAtividade&" + formAtividade.serialize()
                }).done(function (retorno) {
                    if (retorno === "ok") {
                        limparAtividades();
                        M.toast({html: 'Atividade Editada!', classes: 'rounded', displayLength: 3000});
                        $(".contAtividadeTable").load("PHPBody/Refresh_Tabelas/Table_Atividade.php", {acompanhamento: acompanhamento});
                    }

                    //$(".contFichaTable").html(retorno);
                    //location.reload(true);
                    //$(".contFichaTable").load(" .contFichaTable");
                    return false;
                });

                break;
        }

        return false;
    });

    function limparAtividades() {
        $('#tipoAtividade').val("");
        $('#tituloText').val("");
        $('#servidorText').val("");
        $('#descricaoText').val("");
        $('#publicoAlvoText').val("");
        $('#resultadosEsperadosText').val("");
        $('#resultadosObtidosText').val("");
        $('#dataInicioText').val("");
        $('#dataFimText').val("");
        $("#incluirAtividade").val("Incluir Atividade");
    }
});