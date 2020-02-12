<?php
//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/UsuarioDAO.php';

//ESTANCIANDO A CLASSE
$usuarioDAO = new UsuarioDAO();

$usuarios = $usuarioDAO->querySelect();

session_start();
?>

<br/>

<div class="col s12 l12">

    <table cellpadding="1" cellspacing="1" class="responsive-table bordered centered highlight z-depth-3 grey darken-1" id="tabelaUsuarios" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>
            <tr class="grey center-align">
                <th>Nome</th>
                <th>Situação</th>
                <th>Permissão</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $result) { ?>

                <tr>
                    <td><?= $result['nomeCompleto'] ?></td>
                    <td><?php
                        if ($result['situacao'] == 1) {
                            echo "<i class='material-icons green-text text-lighten-2'>check</i>";
                        } else {
                            echo "<i class='material-icons red-text'>close</i>";
                        }
                        ?></td>
                    <td><?php
                        if ($result['permissao'] == 1 || $result['permissao'] == 2) {
                            echo "<i class='material-icons green-text text-lighten-2'>mood</i>";
                        } else {
                            echo "<i class='material-icons red-text'>mood_bad</i>";
                        }
                        ?></td>

                    <td>
                        <button class="btn tooltipped modal-trigger grey darken-3" href="#modalExcluirUser<?= $result[0] ?>"  data-tooltip="Excluir Usuário" data-position="bottom" <?php
                        if ($_SESSION['permissao'] == 2) {
                            if ($result['id'] == 1) {
                                echo "disabled";
                            } else {
                                echo "";
                            }
                        } else {
                            echo "disabled";
                        }
                        ?>> <i class="material-icons">delete</i> </button>
                        <button class="btn tooltipped modal-trigger grey darken-3" href="#modalAprovar<?= $result[0] ?>"  data-tooltip="Aprovar Conta" data-position="top" <?php
                        if ($_SESSION['permissao'] == 1 || $_SESSION['permissao'] == 2) {
                            if ($result['situacao'] == 1) {
                                echo "disabled";
                            } else {
                                echo "";
                            }
                        }
                        ?>> <i class="material-icons">check_circle</i> </button>

                        <button class="btn tooltipped modal-trigger grey darken-3" href="#modalADM<?= $result[0] ?>"  data-tooltip="Direitos Administrativos" data-position="bottom" <?php
                        if ($_SESSION['permissao'] == 1 || $_SESSION['permissao'] == 2) {
                            if ($result['permissao'] == 1 || $result['permissao'] == 2) {
                                echo "disabled";
                            } else {
                                echo "";
                            }
                        }
                        ?>> <i class="material-icons">security</i> </button>
                    </td>
                </tr>

                <!-- Modal Structure -->
            <div id="modalExcluirUser<?= $result[0] ?>" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4>Deseja excluir o <u><?= $result['nomeCompleto'] ?></u>?
                        <b><a onclick="excluirUsuario(<?= $result['id'] ?>);" class="modal-close black-text">Sim</a></b> ou
                        <b><a href="#!" class="modal-close black-text">Não</a></b>
                    </h4>
                    <p></p>
                </div>
            </div>

            <!-- Modal Structure -->
            <div id="modalADM<?= $result[0] ?>" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4>Deseja dar direitos administrativos ao <u><?= $result['nomeCompleto'] ?></u>?
                        <b><a onclick="darDireitos(<?= $result['id'] ?>);" class="modal-close black-text">Sim</a></b> ou
                        <b><a href="#!" class="modal-close black-text">Não</a></b>
                    </h4>
                    <p></p>
                </div>
            </div>

            <!-- Modal Structure -->
            <div id="modalAprovar<?= $result[0] ?>" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4>Deseja aprovar a entrada de <u><?= $result['nomeCompleto'] ?></u>?
                        <b><a onclick="aprovarUsuario(<?= $result['id'] ?>);" class="modal-close black-text">Sim</a></b> ou
                        <b><a href="#!" class="modal-close black-text">Não</a></b>
                    </h4>
                    <p></p>
                </div>
            </div>
        <?php } ?>
        </tbody>

    </table>
    <div class="col-md-12 center text-center">
        <span class="left" id="total_reg"></span>
        <ul class="pagination pager" id="paginaUsuarios"></ul>
    </div>
</div>


<script>
    $('.tooltipped').tooltip();
    $('.modal').modal();

    $('#tabelaUsuarios').pageMe({
        pagerSelector: '#paginaUsuarios',
        activeColor: 'green darken-4',
        prevText: 'Retroceder',
        nextText: 'Avançar',
        showPrevNext: true,
        hidePageNumbers: false,
        perPage: 3
    });

    function aprovarUsuario(id) {
        $.ajax({
            url: 'PHPAjax/Request_AreaAdm.php',
            type: 'POST',
            data: "acao=aprovarUsuario&" + "id=" + id
        }).done(function (data) {
            if (data === "ok") {
                renderizarTudo();
                M.toast({html: "Usuário Aprovado", classes: 'rounded', displayLength: 3000});
            } else {
                renderizarTudo();
                M.toast({html: "Impossível Aprovar Usuário!", classes: 'rounded', displayLength: 5000});
            }
        });
        return false;
    }

    function darDireitos(id) {
        $.ajax({
            url: 'PHPAjax/Request_AreaAdm.php',
            type: 'POST',
            data: "acao=darDireitos&" + "id=" + id
        }).done(function (data) {
            if (data === "ok") {
                renderizarTudo();
                M.toast({html: "Este usuário tornou-se um administrador.", classes: 'rounded', displayLength: 3000});
            } else {
                renderizarTudo();
                M.toast({html: "Impossível dar direitos a este usuário.", classes: 'rounded', displayLength: 5000});
            }
        });
        return false;
    }
</script>
