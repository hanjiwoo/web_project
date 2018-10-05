function clickEvent(event,calEvent){
    $("#fcModal").modal();
}
function modifyPlan(){
    // alert("add");   
    var title=document.getElementById("title").value;
    var sdate=document.getElementById("sdate").value;
    var edate=document.getElementById("edate").value;
    
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