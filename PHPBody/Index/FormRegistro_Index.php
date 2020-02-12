<div class="container center green darken-2 z-depth-3" style="border-radius: 20px 20px 20px 20px; border-style: solid; border-width: 1px 1px 1px 1px;">
    <div class="row">
        <div class="col s12 l12">
            <div class="input-field">
                <i class="material-icons iconis prefix white-text">person</i>
                <input id="nomeCompleto" type="text" class="validate" required>
                <label for="icon_prefix">Nome Completo</label>
            </div>
            <div class="input-field">
                <i class="material-icons iconis prefix white-text">email</i>
                <input id="email" type="text" class="validate" required>
                <label for="icon_prefix">Email</label>
            </div>
            <div class="input-field">
                <i class="material-icons iconis prefix white-text">fiber_pin</i>
                <input id="matricula" type="text" class="validate" required>
                <label for="icon_prefix">Matrícula</label>
            </div>
            <div class="input-field">
                <i class="material-icons iconis prefix white-text">account_box</i>
                <input id="login_reg" type="text" class="validate" required>
                <label for="icon_prefix">Usuário</label>
            </div>
            <div class="input-field">
                <i class="material-icons iconis prefix white-text">enhanced_encryption</i>
                <input id="senha_reg" type="password" class="validate" required>
                <label for="password">Senha</label>
            </div>
        </div>
    </div>
    <div class="row">
        <button class="btn waves-effect waves-light green darken-4" type="submit" id="RegistroButton" onclick="FazerRegistro();">Registrar Usuário</button>
    </div>
</div>

<script>
    $('.tooltipped').tooltip();

    function FazerRegistro() {
        var nome = $("#nomeCompleto").val();
        var email = $("#email").val();
        var matricula = $("#matricula").val();
        var login = $("#login_reg").val();
        var senha = $("#senha_reg").val();

        $.ajax({
            url: 'PHPAjax/Request_Usuario.php',
            type: 'POST',
            data: "acao=fazerRegistro&" + "login=" + login + "&senha=" + senha + "&nome=" + nome + "&email=" + email + "&matricula=" + matricula
        }).done(function (data) {
            if (data === "ok") {
                renderizarFormularioDeLogin();
                M.toast({html: 'Usuário Cadastrado com Sucesso! \n Esperando Aprovação ...', classes: 'rounded', displayLength: 3000});
            } else {
                renderizarFormularioDeLogin();
                M.toast({html: 'Erro ao cadastrar Usuário!', classes: 'rounded', displayLength: 3000});
            }

        });

        return false;
    }

</script>
