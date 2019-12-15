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
        });

        return false;
    });


    //ADICIONAR OU EDITAR NOVA FICHA
    $('form#form-ficha').submit(function () {
        var formFicha = $(this);

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
                        M.toast({html: 'Ficha Editada!', classes: 'rounded', displayLength: 3000});
                        $(".contFichaTable").load("PHPBody/Refresh_Tabelas/Table_Ficha.php");
                    }

                    //$(".contFichaTable").html(retorno);
                    //location.reload(true);
                    //$(".contFichaTable").load(" .contFichaTable");
                    return false;
                });

                break;
            case "adicionarNovaFicha":
                alert("nova");
                $.ajax({
                    url: 'PHPAjax/Request_Ficha.php',
                    type: 'POST',
                    data: "acao=incluirFicha&" + formFicha.serialize()
                }).done(function () {
                    alert("Ficha Incluída com sucesso!");
                    location.reload();

                    return false;
                    //$('#tabelaFichaCont').load(" #tabelaFichaCont");
                });
                break;
            case "adicionarFichaExistente":
                alert("existe");
                $.ajax({
                    url: 'PHPAjax/Request_Ficha.php',
                    type: 'POST',
                    data: "acao=incluirFicha&" + formFicha.serialize()
                }).done(function () {
                    alert("Ficha Incluída com sucesso!");
                    location.reload();

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

        $.ajax({
            url: 'PHPAjax/Request_Ficha.php',
            type: 'POST',
            data: "acao=deletarFicha&" + "id=" + id
        }).done(function () {
            alert("Ficha excluida com sucesso!");
            //location.reload();
            //$('#tabelaFichaCont').load(" #tabelaFichaCont");
        });

        return false;
    });
});