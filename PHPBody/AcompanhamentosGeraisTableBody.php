<table border="1">
    <tr>
        <td>Id</td>
        <td>Título</td>
        <td>Servidor</td>
        <td>Curso</td>
        <td>Data Ínicio</td>
        <td>Data Fim</td>
        <td>Ação</td>
    </tr>
    <?php foreach ($acompanhamentoDAO->querySelect() as $result) { ?>
        <tr>
            <td><?= $result[0] ?></td>
            <td><?= $result[1] ?></td>
            <td><?= $result[2] ?></td>
            <td><?= $result[3] ?></td>
            <td><?= $result[4] ?></td>
            <td><?= $result[5] ?></td>
            <td>
                <a href="">SELECIONAR</a>
                <a href="">EDITAR</a>
                <a href="">EXCLUIR</a>
            </td>
        </tr>
    <?php } ?> 
</table>