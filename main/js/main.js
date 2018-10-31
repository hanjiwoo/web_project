function plan_page(){
    $(document).ready(function(){
        $.ajax({
            type:"POST",
            url:"./js/main.php",
            datatype:"json",

            success:function(response){
                console.log(response['text']);
                if(response['text']=="good"){
                    alert("yes");
                    location.replace('../plan/index.html');
                }
                else if(response['text']=="bad"){
                    alert("로그인이 필요합니다.");
                    location.replace('../login/index.html');
                }
            },
            error:function(response,status, error){
                alert(response.status+"responsetext: "+response.responseText+"error:"+error);
            }
        });
    });
}
