renderizarFormularioDeLogin();

function renderizarFormularioDeLogin() {
    $("#formUsuario").load("PHPBody/Index/FormUsuario.php");
    $("#formRegistro").load("PHPBody/Index/FormRegistro_Index.php");
    return false;
}

function redirecionarParaPaginaPrincipal() {
    window.location.href = "/PROJETO_VERSAO_3.0/AcompanhamentosGerais.php";

    return false;
}

