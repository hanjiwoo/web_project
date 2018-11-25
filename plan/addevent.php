<?php
    include "../dbconnect.php";

    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $user_id = $_COOKIE['user_id'];

    $unum_array = mysqli_query($mysqli,"SELECT user_num FROM user_info WHERE user_id='$user_id'");
    $row=mysqli_fetch_array($unum_array);
    $user_num=$row[0];
    
    $result=mysqli_query($mysqli,"INSERT INTO plan(plan_title,start_event,end_event,user_num)VALUES('$title','$start','$end','$user_num')");
?>
