function check_pw(){
    // var pw = document.getElementById("pw").value;
    // var pw_c = document.getElementById("pw_c").value;
    
    if(document.getElementById("pw").value != document.getElementById("pw_c").value){
        document.getElementById('pw_check').innerHTML = '비밀번호가 틀렸습니다. 다시 입력해 주세요';
    }
    else {
        document.getElementById('pw_check').innerHTML = '<p style="color:green;">비밀번호가 같습니다</p>';
        //document.getElementById('pw_check').innerHTML = '';
    }
}

function check(){
    var name = document.getElementById('name');
    var id = document.getElementById('id');
    var pw = document.getElementById('pw');
    var pw_c = document.getElementById('pw_c');
    var nick = document.getElementById('nick');
    var birth = document.getElementById('birth');
    if(name.value==''||id.value==''||pw.value==''||pw_c.value==''||nick.value==''||birth.value=='') {
        alert('폼을 모두 작성해주세요');
        return false;
    }    
    else if(isNaN(birth.value)){
        alert('생일은 숫자로 입력해주세요');
        return false;
    }
    else return true;
}
function createData(){
    var id = document.getElementById('id').value;
    var sendData = {id:id};
    console.log(sendData);
    return sendData;
}
function check_id(){
    $(document).ready(function(){ 
            $.ajax({
                type:'POST',
                url:"./overlap_c.php",
                data:createData(),
                datatype : "json",

                success:function(data){
                    if(data['text']=="good"){
                        document.getElementById('id_check').innerHTML='<p style="color:green;">사용가능한 아이디 입니다.</p>';
                    }
                    else if(data['text']=="bad"){
                        document.getElementById('id_check').innerHTML='<p style="color:red;">이미 사용중인 아이디 입니다.</p>';
                    }
                },
                error:function(data,status, error){
                    alert(data.status+"responsetext: "+data.responseText+"error:"+error);
                    //alert(error);
                }
            });
    });
}