<?php

    if ($action === '' && $param === ''){
        echo json_encode(['Error' => 'Caminho não encontrado']);
    }
    //get all
    if ($action == 'listAll' && $param == ''){
        try {
            $db = DB::connect();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $rs =$db -> prepare("SELECT * FROM cliente ORDER BY ID_CLIENTE");
            $rs -> execute();
            $obj = $rs -> fetchAll(PDO::FETCH_ASSOC);
            if ($obj){
                echo json_encode(["data" => $obj]);
            } else {
                echo json_encode(["error"=> "Não há dados!"]);
            }
        } catch (PDOException $e) {
        echo $e -> getMessage();
        }
    }
    //get by id
    if ($action == 'list' && $param != ''){
        try {
            $db = DB::connect();
            $rs =$db -> prepare("SELECT * FROM cliente WHERE ID_CLIENTE= :id");
            $rs->bindParam(':id', $param, PDO::PARAM_INT);
            $rs->execute();
            $obj = $rs->fetch(PDO::FETCH_ASSOC);
            if ($obj){
                echo json_encode(["data" => $obj]);
            } else {
                echo json_encode(["error"=> "Não há dados!"]);
            } 
        } catch (PDOException $e) {
            echo $e -> getMessage();
        }
    }