<?php
    include "../dbconnect.php";
    header("Content-Type: application/json");

    $id = $_POST['id'];

    if(!$id){
        throw new exception('id 값이 없습니다.');
    }
    $result=mysqli_query($mysqli,"SELECT count(*) FROM user_info WHERE user_id='$id'");

    $rows=mysqli_fetch_array($result);

    if($rows[0]==0) {
        $data = array('text'=>'good');
        echo json_encode($data);
    }
    else{
        $data = array('text'=>'bad');
        echo json_encode($data);
    }
?>
