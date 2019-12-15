<div class="col s12 l12"><br/>
    <form id="form-TableFicha" action="" method="post">
        <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
            <tr class="grey lighten-1">
                <td><b>Código</b></td>
                <td><b>Trabalha</b></td>
                <td><b>Dependentes</b></td>
                <td><b>Especial</b></td>
                <td><b>Moradia</b></td>
                <td><b>Sexo</b></td>
                <td><b>Data</b></td>
                <td><b>Cidade</b></td>
                <td><b>Ações</b></td>
            </tr>
            <tbody class="contFichaTable">
                <?php foreach ($fichaDAO->querySelect() as $result) { ?>
                    <tr>
                        <td><h6><b><?= $result[1] ?></b></h6></td>
                        <td><?php if ($result[3] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                        <td><?php if ($result[4] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                        <td><?php if ($result[5] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                        <td><?php if ($result[6] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                        <td><?php if ($result[7] == "M") { ?> <img src="IMG/boy.png" height="40px" width="40px"> <?php } else { ?> <img src="IMG/woman.png" height="40px" width="40px"> <?php } ?></td>
                        <td><?= $result[8] ?></td>
                        <td><?= $result[12] ?></td>


                        <td>
                            <button class="btn tooltipped deletarFicha" id="<?= $result[0] ?>" data-tooltip="Deletar Acompanhamento" data-position="top"> <i class="material-icons">delete</i> </button>

                            <button class="btn tooltipped editarFicha" id="<?= $result[1] ?>" data-tooltip="Deletar Acompanhamento" data-position="top"> <i class="material-icons">edit</i> </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br/>
        <div class="col-md-12 center text-center">
            <span class="left" id="total_reg"></span>
            <ul class="pagination pager" id="paginaFicha"></ul>
        </div>
    </form>
</div>