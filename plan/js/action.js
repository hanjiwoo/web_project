function clickEvent(event,calEvent){
    $("#fcModal").modal();
}
function modifyPlan(){
    var title=document.getElementById("title").value;
    var sdate=document.getElementById("sdate").value;
    var edate=document.getElementById("edate").value;

    l_title=title;
    l_sdate=sdate;
    l_edate=edate;
    
    $("#fcModal").modal('hide');
}