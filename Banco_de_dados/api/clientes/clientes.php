<?php

    if ($method == "GET" && $api == "db"){
        include_once 'get.php';
    }
    if ($method == 'POST'&& $api == 'db'){
        include_once 'post.php';
    }
    if ($method == 'PUT'&& $api == "db"){
        include_once 'put.php';
    }
    if ($method  == 'DELETE'&& $api == "db"){
        include_once 'delete.php';
    }