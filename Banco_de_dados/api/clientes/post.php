<?php

    if ($action === '' && $param === ''){
        echo json_encode(['Error' => 'Caminho não encontrado']);
    }

    if ($action == 'create' && $param == ''){
        $sql = "INSERT INTO cliente (";

        $contador = 1;
        foreach (array_keys($_POST) as $valor){
            if (count($_POST)> $contador){
                $sql .= "{$valor},";
            } else {
                $sql .= "{$valor}";
            }
            $contador++;
        }
        $sql .= ") VALUES (";
        $contador = 1;
        foreach (array_values($_POST) as $valor){
            if (count($_POST)> $contador){
                $sql .= "'{$valor}',";
            } else {
                $sql .= "'{$valor}'";
            }
            $contador++;
        }
        $sql .= ")";
        
        
        $db = DB::connect();
        $rs = $db->prepare($sql);
        $exec = $rs->execute();

        if ($exec){
            echo json_encode(["data"=> "Dados postados com sucesso"]);
        } else {
            echo json_encode(["error"=> "Algum erro ocorreu"]);
        }
    }