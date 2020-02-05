<div class="container">
    <div class="row"><br>
        <div class="col m12 s12 center">
            <form id="loginForm" action="" method="post" onsubmit="return false;">
                <div class="row">
                    <div class="input-field col m12 s12">
                        <i class="material-icons iconis prefix green-text text-darken-4">account_box</i>
                        <input id="login" type="text" class="validate black-text">
                        <label for="icon_prefix">Usuário</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m12 s12">
                        <i class="material-icons iconis prefix green-text text-darken-4">enhanced_encryption</i>
                        <input id="senha" type="password" class="validate black-text">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light green darken-4" type="submit" id="LogarButton" onclick="FazerLogin();">Iniciar Sessão</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('.tooltipped').tooltip();

    function FazerLogin() {
        var login = $("#login").val();
        var senha = $("#senha").val();

        $.ajax({
            url: 'PHPAjax/Request_Usuario.php',
            type: 'POST',
            data: "acao=fazerLogin&" + "loginL=" + login + "&senhaL=" + senha
        }).done(function (data) {
            if (data === "ok") {
                redirecionarParaPaginaPrincipal();
            } else if (data === "erroSituacao") {
                renderizarFormularioDeLogin();
                M.toast({html: 'Este usuário necessita da aprovação do Administrador.', classes: 'rounded', displayLength: 3000});
            } else {
                renderizarFormularioDeLogin();
                M.toast({html: 'Usuário e/ou Senha incorretos.', classes: 'rounded', displayLength: 3000});
            }

        });

        return false;
    }

</script>
