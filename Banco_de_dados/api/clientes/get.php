<?php

    if ($action === '' && $param === ''){
        echo json_encode(['Error' => 'Caminho não encontrado']);
    }
    //get all
    if ($action == 'listAll' && $param == ''){
        $db = DB::connect();
        $rs =$db -> prepare("SELECT * FROM cliente ORDER BY ID_CLIENTE");
        $rs -> execute();
        $obj = $rs -> fetchAll(PDO::FETCH_ASSOC);

        if ($obj){
            echo json_encode(["data" => $obj]);
        } else {
            echo json_encode(["error"=> "Não há dados!"]);
        }
    }
    //get by id
    if ($action == 'list' && $param != ''){
        $db = DB::connect();
        $rs =$db -> prepare("SELECT * FROM cliente WHERE ID_CLIENTE={$param}");
        $rs -> execute();
        $obj = $rs -> fetchObject();

        if ($obj){
            echo json_encode(["data" => $obj]);
        } else {
            echo json_encode(["error"=> "Não há dados!"]);
        }
    }