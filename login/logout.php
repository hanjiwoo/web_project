<?php
    if(isset($_COOKIE["user_id"])){
        setcookie("user_id","",time()-84600,"/",".fbclub.com");
    }
    else {
        header("location:http://www.login.fbclub.com");
    }
?>
<script>
    location.replace("./index.html");
</script>