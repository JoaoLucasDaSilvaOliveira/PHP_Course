<?php

    if ($action === '' && $param === ''){
        echo json_encode(['Error' => 'Caminho não encontrado']);
    }
    if ($action == 'delete'&& $param == ''){
        echo "É necessário informar um cliente";
    }
    if ($action == 'delete'&& $param != ''){
        array_shift($_POST);
        $db = DB::connect();
        $rs = $db->prepare("DELETE FROM cliente WHERE ID_CLIENTE={$param}");
        $exec = $rs ->execute();

        if ($exec) {
            echo json_encode(["data"=> "Dados excluídos com sucesso"]);
        } else {
            echo json_encode(["error"=> "Houve um erro na exlclusão, consulte log"]);
        }
    }