<?php

    if ($method == "GET" && $api == "db"){
        include_once 'get.php';
    }
    if ($method == 'POST'&& $api == 'db'){
        include_once 'post.php';
    }
    if ($method == 'POST' && $_POST["_method"] == 'PUT'){
        include_once 'put.php';
    }
    if ($method == 'POST'&& $_POST['_method'] == 'DELETE'){
        include_once 'delete.php';
    }