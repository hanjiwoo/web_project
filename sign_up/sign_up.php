<?php
    $host='localhost';
    $user='root';
    $user_pwd=2464;
    $dbName='web_test';
    
    $name=$_POST['name'];
    $id=$_POST['id'];
    $pwd=$_POST['pwd'];
    $pwd_c=$_POST['pwd_c'];
    $nick=$_POST['nick'];
    $birth=$_POST['birth'];
    
    // if($pwd!=$pwd_c)
    // {
    //     echo "password confirm is different from password";
    //     echo "<a href=./main.php>back page</a>";
    //     exit();
    // }
    
    $mysqli=new mysqli("$host","$user",$user_pwd,"$dbName");

    $signup=mysqli_query($mysqli,"INSERT INTO user_info (user_name,user_id,user_pwd,user_nick,user_birth)
    VALUES('$name','$id','$pwd','$nick','$birth')");
    if($signup)
    {
        echo "sign up success";
    }
    else
    {
        echo "sigh up failed";
    }
?>
