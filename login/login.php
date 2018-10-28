<?php
    include './dbconnect.php';

    $id=$_POST['id'];
    $pwd=$_POST['password'];

    if(!isset($_POST['id'])||!isset($_POST['password'])) {
        header("location:http://www.login.fbclub.com");
    }
    else{
        $check=0;

        $login=mysqli_query($mysqli,"SELECT user_id, user_pw FROM user_info WHERE user_id='$id'and user_pw='$pwd'");

        $rows=mysqli_fetch_array($login);

        if($rows){
            setcookie("user_id",$id,time()+84600,"/",".fbclub.com");
            echo("<script language='javascript'>alert('로그인에 성공했습니다.');location.replace('http://www.main.fbclub.com');</script>");
            // echo("<script language='javascrip'>location.replace('http://www.main.fbclub.com');</script>");
        }
        else{
            echo("<script language='javascript'>alert('로그인에 실패했습니다.');location.replace('http://www.login.fbclub.com');</script>");
            // echo("<script language='javascrip'>location.replace('http://www.login.fbclub.com');</script>");
        }
        // while($rows=mysqli_fetch_array($login)){
        //     if($rows['user_id']==$id && $rows['user_pw']==$pwd){
        //         $check=$check+1;
        //         setcookie("user_id",$id,time()+84600,"/",".fbclub.com");
        //     }
        // }
    }
?>

