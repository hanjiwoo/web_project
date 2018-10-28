function clickEvent(event,calEvent){
    $("#fcModal").modal();
}
function check_date(sdate,edate){
    var pattern = /^(19|20)\d{2}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[0-1])$/;

    if(pattern.test(sdate)&&pattern.test(edate)){
        return true;
    }
    else{
        return false;
    }
}
function modifyPlan(){
    // alert("add");   
    var title=document.getElementById("title").value;
    var sdate=document.getElementById("sdate").value;
    var edate=document.getElementById("edate").value;
    
    if(check_date(sdate,edate)){
       $.ajax({
            url:"./addevent.php",
            type:"POST",
            data:{title:title, start:sdate, end:edate},
            datatype: "json",
            success:function(respond)
            {
                    $("#fcModal").modal('hide'); 
                    $('#calendar').fullCalendar('refetchEvents');
                    alert("add event succeed");
            },
            error:function(data,status, error){
                alert(data.status+"responsetext: "+data.responseText+"error:"+error);
                //alert(error);
            }
        }) 
    }
    else{
        alert("유효한 날짜를 yyyy-mm-dd 형식으로 입력해주세요");
        document.getElementById("title").value="";
        document.getElementById("sdate").value="";
        document.getElementById("edate").value="";
    }
    
    
   
}