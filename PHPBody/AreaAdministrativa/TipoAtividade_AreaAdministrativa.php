<input type="text" name="nomeTipoAtividadeText" value="<?= $nomeTipoAtividade ?>" placeholder="Tipo Atividade"/>
<input type="text" name="descricaoTipoAtividadeText" value="<?= $descricaoTipoAtividade ?>" placeholder="Descrição"/>
<p><input class="btn right" type="submit" id="btnCad" name="cadastrarTipoAtividadeButton" value="Cadastrar Tipo Atividade"/></p>

<div class="col s12 l12"><br/>
    <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
        <thead>
            <tr class="grey lighten-1 center-align">
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoAtividadeDAO->querySelect() as $result) { ?>
                <tr>
                    <td><?= $result['nome'] ?></td>
                    <!--<td></td>-->
                    <td><a class="waves-effect waves-light btn modal-trigger tooltipped" data-position="bottom" data-tooltip="Descrição do Tipo de Atividade" href="#modalTipoAtividade<?= $result[0] ?>"><i class="material-icons">description</i></a></td>
                    <td>
                        <a href="?excluirIdTipoAtividade=<?= $result[0] ?>" class="waves-light modal-trigger btn tooltipped" 
                           data-position="top" data-tooltip="Deletar Tipo de Atividade" name="btn-deletarAcompanhamento">
                            <i class="material-icons">delete</i>
                        </a>

                        <a href="?pesquisarIdTipoAtividade=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Editar Tipo de Atividade" name="btn-selecionarAcompanhamento">
                            <i class="material-icons">edit</i>
                        </a>
                    </td>
                </tr>

                <!-- Modal Structure -->
            <div id="modalTipoAtividade<?= $result[0] ?>" class="modal">
                <div class="modal-content">
                    <h4>Descrição do Tipo Atividade</h4>
                    <p><?= $result['descricao'] ?></p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
            </div>

        <?php } ?>
        </tbody>
    </table>
    </br></br>
</div>