<?php
if (count($_POST) > 0) {    
    $db = new mysqli('localhost', 'root', '', 'dbmad3');

    $row = $db->query("SELECT * FROM ficha WHERE codigo = '{$_POST['codigoFicha']}'")->fetch_all();
    
    $data['trabalha']    = $row[0][3];
    $data['dependentes'] = $row[0][4];
    $data['atendimento'] = $row[0][5];
    $data['moradia']     = $row[0][6];
    $data['sexo']        = $row[0][7];
    $data['date']      = $row[0][8];
    $data['cidade']      = $row[0][10];

    
    echo json_encode($data);
}

/*
if (count($_POST) > 0) {
    $db = new mysqli('localhost', 'root', '', 'dbmad3');

    $row = $db->query("SELECT * FROM ficha WHERE codigo = '{$_POST['codigoFicha']}' LIMIT 1")->fetch_all();
    echo "".$row[0][3];
}
 */


