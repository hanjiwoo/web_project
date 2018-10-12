<?php
    include "./dbconnect.php";

    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    $result=mysqli_query($mysqli,"INSERT INTO plan (plan_title,start_event,end_event)VALUES('$title','$start','$end')");
        // if($result){
        //     $respond=array("text"=>"good");
        //     echo json_encode($respond);
        // }
        // else{
        //     $respond=array("text"=>"bad");
        //     echo json_encode($respond);
        // }
?>