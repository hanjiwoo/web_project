<?php
    $host='localhost';
    $user='root';
    $user_pwd=2464;
    $dbName='web_test';

    $id=$_POST['id_check'];
    
    $mysqli=new mysqli("$host","$user",$user_pwd,"$dbName");

    $result=mysqli_query($mysqli,"SELECT count(*) FROM user_info WHERE user_id='$id'");

    $row=mysqli_fetch_array($result);
?>
<script>
    var row="<?=$row[0]?>";
    if(row==1){
        alert("이미 사용중인 아이디입니다.");
    }
    else{
        alert("사용 가능한 아이디입니다.");
    }
</script>
