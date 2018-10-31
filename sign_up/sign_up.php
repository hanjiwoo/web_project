<?php
    include "./dbconnect.php";

    $name=$_POST['name'];
    $id=$_POST['id'];
    $pwd=$_POST['pwd'];
    $pwd_c=$_POST['pwd_c'];
    $nick=$_POST['nick'];
    $birth=$_POST['birth'];
    
    $signup=mysqli_query($mysqli,"INSERT INTO user_info (user_name,user_id,user_pw,user_nick,user_birth)
    VALUES('$name','$id','$pwd','$nick','$birth')");
    if($signup)
    {
       	echo("<script language='javascript'>location.href='../login/index.html';</script>");
    }
    else
    {
        header("location:http://www.signup.fbclub.com");
        echo("<script>alter('login failed');</script>");
    }
?>
