<?php
    include "./dbconnect.php";

    $result=mysqli_query($mysqli,"SELECT * FROM plan");

    $data=array();
    while($rows=mysqli_fetch_array($result)){
        $data[]=array(
            'id' => $rows['plan_id'],
            'title' => $rows['plan_title'],
            'start' => $rows['start_event'],
            'end' => $rows['end_event']
        );
    }

    echo json_encode($data);
?>