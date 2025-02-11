<?php

if ($action === '' && $param === ''){
    echo json_encode(['Error' => 'Caminho não encontrado']);
}
if ($action == 'update'&& $param == ''){
    echo "É necessário informar um cliente";
}
if ($action == 'update'&& $param != ''){
    array_shift($_POST);

    $sql = "UPDATE cliente SET ";

    $contador=1;
    foreach (array_keys($_POST) as $indice) {
        if (count($_POST) > $contador) {
            $sql .= "{$indice} = {$_POST[$indice]},";
        } else {
            $sql .= "{$indice} = {$_POST[$indice]}";
        }
        $contador++;
    }

    $sql .= " WHERE ID_CLIENTE={$param}";
    $db = DB::connect();
        $rs = $db->prepare($sql);
        $exec = $rs->execute();

        if ($exec){
            echo json_encode(["data"=> "Dados atualizados com sucesso"]);
        } else {
            echo json_encode(["error"=> "Algum erro ocorreu no insert de dados"]);
        }
}