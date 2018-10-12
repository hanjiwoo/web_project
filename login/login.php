<?php
    include './dbconnect.php';

    $id=$_POST['id'];
    $pwd=$_POST['password'];

    if(!isset($_POST['id'])||!isset($_POST['password'])) {
        header("location:http://www.login.fbclub.com");
    }
    else{
        $check=0;

        $login=mysqli_query($mysqli,"SELECT user_id, user_pwd FROM user_info");

        while($rows=mysqli_fetch_array($login)){
            if($rows['user_id']==$id && $rows['user_pwd']==$pwd){
                $check=$check+1;
                setcookie("user_id",$id,time()+84600,"/",".fbclub.com");
            }
        }
    }
?>
<script>
    var check=<?=$check?>;  
    if(check>0){
        alert("로그인에 성공했습니다.");
         location.replace("http://www.main.fbclub.com");
        //location.replace("./logout.html");
    }  
    else {
        alert("로그인에 실패했습니다.");
        location.replace("./index.html");
    }
</script>
