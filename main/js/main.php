<?php
    if(isset($_COOKIE["user_id"])){
        $data = array('text'=>'good');
        echo json_encode($data);
    }
    else{
        $data = array('text'=>'bad');
        echo json_encode($data);
    }
?>