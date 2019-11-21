<table border="1" class="centered">
    <tr>
        <td>Título</td>
        <td>Servidor</td>
        <td>Curso</td>
        <td>Data Ínicio</td>
        <td>Data Fim</td>
        <td>Ação</td>
    </tr>
    <?php foreach ($acompanhamentoDAO->querySelect() as $result) { ?>
        <tr>
            <td><?= $result[1] ?></td>
            <td><?= $result[2] ?></td>
            <td><?= $result[3] ?></td>
            <td><?= $result[4] ?></td>
            <td><?= $result[5] ?></td>
            <td>
                <a href="?seleciona=<?=$result[0]?>">SELECIONAR</a>
                <a href="?edita=<?=$result[0]?>">EDITAR</a>
                <a href="?excluir=<?=$result[0]?>">EXCLUIR</a>
            </td>
        </tr>
    <?php } ?> 
</table>