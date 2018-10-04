<?php
    $cookie = $_COOKIE['user_id'];

    if(!isset($cookie)){
        $response = array('text'=>'no exist');
        echo json_encode($response);
    }
    else{
        $response = array('text'=>'exist');
        echo json_encode($response);
    }
?>