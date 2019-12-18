$(function () {
    //PLOTAR OS VALORES DAS FICHA EXISTENTE
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

        M.toast({html: 'Ficha Selecionada!', classes: 'rounded', displayLength: 3000});
    });
    //PLOTAR OS VALORES DAS FICHAS A SEREM EDITADAS
    $(".editarFicha").on("click", function () {
        var codigo = $(this).attr('id');

        $.ajax({
            url: 'PHPAjax/Request_Ficha.php',
            type: 'POST',
            dataType: "JSON",
            data: "acao=plotarValores&" + "codigoFicha=" + codigo
        }).done(function (data) {
            $('#idFicha').val(data.id);
            $('#SelectTrabalha').val(data.trabalha);
            $('#SelectDependentes').val(data.dependentes);
            $('#SelectAtendimento').val(data.atendimento);
            $('#SelectMoradia').val(data.moradia);
            $('#SelectSexo').val(data.sexo);
            $('#TextData').val(data.date);
            $('#SelectCidade').val(data.cidade);

            $("#SelectFicha").prop("disabled", true);
            $("#incluirFicha").val("Salvar Ficha");

            M.toast({html: 'Editando Ficha ...', classes: 'rounded', displayLength: 3000});
        });

        return false;
    });


    //ADICIONAR OU EDITAR NOVA FICHA
    $('form#form-ficha').submit(function () {
        var formFicha = $(this);
        var acompanhamento = $("#acompanhamentoFicha").val();

        if ($("#incluirFicha").val() === "Salvar Ficha") {
            $acao = "salvarFichaComMesmoID";
        } else if ($("#SelectFicha :selected").val() !== "") {
            $acao = "adicionarFichaExistente";
        } else if ($("#incluirFicha").val() === "Incluir Ficha") {
            $acao = "adicionarNovaFicha";
        }

        switch ($acao) {
            case "salvarFichaComMesmoID":
                $.ajax({
                    url: 'PHPAjax/Request_Ficha.php',
                    type: 'POST',
                    data: "acao=salvarFicha&" + formFicha.serialize()
                }).done(function (retorno) {

                    if (retorno === "ok") {
                        limparFichas();
                        M.toast({html: 'Ficha Editada!', classes: 'rounded', displayLength: 3000});
                        $(".contFichaTable").load("PHPBody/Refresh_Tabelas/Table_Ficha.php", {acompanhamento: acompanhamento});
                    }

                    //$(".contFichaTable").html(retorno);
                    //location.reload(true);
                    //$(".contFichaTable").load(" .contFichaTable");
                    return false;
                });

                break;
            case "adicionarNovaFicha":
                $.ajax({
                    url: 'PHPAjax/Request_Ficha.php',
                    type: 'POST',
                    data: "acao=incluirFicha&" + formFicha.serialize()
                }).done(function () {
                    limparFichas();
                    M.toast({html: 'Ficha Incluida!!', classes: 'rounded', displayLength: 3000});
                    $(".contFichaTable").load("PHPBody/Refresh_Tabelas/Table_Ficha.php", {acompanhamento: acompanhamento});

                    return false;
                    //$('#tabelaFichaCont').load(" #tabelaFichaCont");
                });
                break;
            case "adicionarFichaExistente":
                $.ajax({
                    url: 'PHPAjax/Request_Ficha.php',
                    type: 'POST',
                    data: "acao=incluirFicha&" + formFicha.serialize()
                }).done(function () {
                    limparFichas();
                    M.toast({html: 'Ficha Incluida!!', classes: 'rounded', displayLength: 3000});
                    $(".contFichaTable").load("PHPBody/Refresh_Tabelas/Table_Ficha.php", {acompanhamento: acompanhamento});

                    return false;
                    //$('#tabelaFichaCont').load(" #tabelaFichaCont");
                });
                break;
        }

        return false;
    });

    //DELETAR FICHA FICHA EXISTENTE
    $(".deletarFicha").on("click", function () {
        var id = $(this).attr('id');
        var acompanhamento = $("#acompanhamentoFicha").val();

        $.ajax({
            url: 'PHPAjax/Request_Ficha.php',
            type: 'POST',
            data: "acao=deletarFicha&" + "id=" + id
        }).done(function () {
            M.toast({html: 'Ficha Excluída', classes: 'rounded', displayLength: 3000});
            $(".contFichaTable").load("PHPBody/Refresh_Tabelas/Table_Ficha.php", {acompanhamento: acompanhamento});

            //location.reload();
            //$('#tabelaFichaCont').load(" #tabelaFichaCont");
        });

        return false;
    });


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
});