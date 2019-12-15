<?php
//IMPORTANDO AS CLASSES---------------------------------------------------------
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/FichaDAO.php';
//------------------------------------------------------------------------------    
//ESTANCIANDO A CLASSE----------------------------------------------------------
$fichaDAO = new FichaDAO();
//------------------------------------------------------------------------------
echo "hy".$fichaDAO->getFicha()->getAcompanhamento();
?>

<head>
    <?php require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/PHPHeader/Head.php'; ?>
</head>

<tbody>
    
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